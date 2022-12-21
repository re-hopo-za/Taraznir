<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ProjectSingle extends Component
{
    public ?object $project;
    public ?object $categories;
    public ?object $related;

    public function mount( $slug )
    {
        $this->project = Project::where( 'slug'  ,$slug )->with(['meta' ])->first();
        if( !isset( $this->project->id ) ) {
            return abort(404);
        }

        $this->categories  = Cache::rememberForever( 'projects_categories' ,function (){
            return Category::where( 'model' ,'project' )->get();
        });

        $categories = $this->project->categories->modelKeys();
        $this->related = Cache::rememberForever( 'blog_related_'.$slug ,function () use($categories){
            return Project::whereHas('categories', function ($q) use ($categories) {
                $q->whereIn('categories.id', $categories );
            })->where('id', '<>', $this->project->id )->take(7)->get();
        });

        if ( !$this->related->count() ) {
            $this->related = Cache::rememberForever( 'blog_not_related_'.$slug ,function ($slug){
                return Project::where('id', '<>', $this->project->id )->take(3)->get();
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
