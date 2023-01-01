<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class ProjectPage extends Component
{
    public string  $category;
    public ?object $projects;
    public ?object $categories;


    public function mount( $category = '' )
    {
        $this->categories = redisHandler( 'projects_categories' ,function (){
            return Category::where( 'model' ,'project' )->get();
        });
        $this->category = $category;

        $all_projects = redisHandler( 'projects' ,function (){
            return Project::with(['categories'])->get();
        });
        if( !empty( $category ) ){
            $this->projects = redisHandler( 'projects_specific_category_'.$category ,function (){
                return Project::whereHas('categories' ,function ($query){
                    $query->where('slug' ,$this->category);
                })->get();
            });
        }else {
            $this->projects = $all_projects;
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




