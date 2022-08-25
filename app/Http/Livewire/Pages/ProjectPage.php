<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Project;
use App\Models\Tag;
use Livewire\Component;

class ProjectPage extends Component
{
    public string  $category;
    public ?object $project;
    public ?object $categories;


    public function mount( $category = '' )
    {
        $this->categories = Category::where( 'model' ,'project' )->get();
        $this->category   = $category;

        if( !empty( $category ) ){
            $this->project = Project::with(['categories'])
                ->whereHas('categories' ,function ($query) use ($category) {
                    $query->where('slug' ,$category);
                })
                ->get();
        }else {
            $this->project = Project::all();
        }
    }

    public function render()
    {
        return view('pages.project-page' ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'projects'   => $this->project ,
        ]);
    }
}
