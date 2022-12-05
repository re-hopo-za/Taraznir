<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ProjectPage extends Component
{
    public string  $category;
    public ?object $projects;
    public ?object $categories;


    public function mount( $category = '' )
    {
        $this->categories  = Cache::rememberForever( 'projects_categories' ,function (){
            return Category::where( 'model' ,'project' )->get();
        });
        $this->category = $category;

        if( !empty( $category ) ){
            $this->projects = Cache::rememberForever( 'projects_specific_category' ,function (){
                return Project::with(['categories'])->whereHas('categories' ,function ($query){
                    $query->where('slug' ,$this->category);
                })
                    ->get();
            });
        }else {
            $this->projects  = Cache::rememberForever( 'projects' ,function (){
                return Project::all();
            });
        }
    }

    public function render()
    {
        return view('pages.project-page' ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'projects'   => $this->projects ,
        ]);
    }
}
