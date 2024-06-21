<?php

namespace Modules\Project\app\Livewire;

use Livewire\Component;
use Modules\Core\app\Models\Category;
use Modules\Project\app\Models\Project;

class ProjectSection extends Component
{
    public function render()
    {
        $items = redis_handler('project:section_items' ,function (){
            return Project::with(['category' ,'meta'])
                ->get();
        });

        $cats = redis_handler('project:section_cats' ,function (){
            return Category::with(['project'])
                ->where('model' ,'project')
                ->get();
        });

        return view('project::project-section' ,[
            'items' => $items,
            'cats'  => $cats
        ]);
    }
}
