<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Option;
use App\Models\Project;
use Livewire\Component;

class ProjectPage extends Component
{
    public string  $category;
    public ?object $projects;
    public ?object $categories;


    public function mount( $category = '' )
    {
        $this->category = $category;

        if( !empty( $category ) ){
            $this->projects = redisHandler( 'projects:specific_category_'.$category ,function (){
                return Project::whereHas('categories' ,function ($query){
                    $query->where('slug' ,$this->category);
                })->get();
            });
            if( empty( $this->projects) ) {
                return abort(404);
            }
        }else {
            $all_projects = redisHandler( 'projects:' ,function (){
                return Project::with(['categories'])->get();
            });
            $this->projects = $all_projects;
        }

        $this->categories = redisHandler( 'categories:projects' ,function (){
            return Category::where( 'model' ,'project' )->get();
        });
    }

    public function render()
    {
        $seo = redisHandler( 'project_page_seo' ,function (){
            return Option::where('key' ,'project_page_seo')->first();
        });

        return view('pages.project-page' ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'projects'   => $this->projects ,
            'seo'        => $seo ,
        ]);
    }
}




