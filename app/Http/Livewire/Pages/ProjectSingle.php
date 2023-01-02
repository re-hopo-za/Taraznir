<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Str;
use Livewire\Component;

class ProjectSingle extends Component
{
    public ?object $project;
    public ?object $categories;
    public ?object $related;

    public function mount( $slug )
    {
        $en_slug = Str::slug( $slug );

        $this->project = redisHandler('project:'.$en_slug ,function () use($slug) {
            return Project::where( 'slug' ,'=' ,$slug )->with(['meta','categories' ])->first();
        });
        if( !isset( $this->project->id ) ) {
            return abort(404);
        }
        $all_projects = redisHandler( 'projects:' ,function (){
            return Project::with(['categories' ,'meta']);
        });
        $this->categories = redisHandler( 'projects:categories' ,function (){
            return Category::where( 'model' ,'project' )->get();
        });


        $categories = $this->project->categories->modelKeys();
        $this->related = redisHandler( 'projects:related_'.$en_slug ,function () use($all_projects ,$categories){
            return $all_projects
                ->filter( fn( $item ) => $item->whereIn('categories.id' ,$categories) )
                ->where('id', '<>', $this->project->id )->take(3);
        });


        if ( !$this->related->count() ) {
            $this->related = redisHandler( 'projects:not_related_'.$en_slug ,function () use($all_projects){
                return $all_projects::where('id', '<>', $this->project->id )->take(3)->get();
            });
        }
    }


    public function render()
    {
        return view('pages.project-single',[
            'categories' => $this->categories ,
            'project'    => $this->project ,
            'related'    => $this->related ,
            'meta'       => $this->project->meta->pluck('value','key')->toArray() ,
        ]);
    }

}
