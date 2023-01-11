<?php

namespace App\Http\Livewire\Components\Project;

use Livewire\Component;

class ProjectDetails extends Component
{
    public mixed $meta;
    public ?object $categories;
    public function mount( $meta ,$categories)
    {
        $this->meta = $meta;
        $this->categories = $categories;
    }

    public function render()
    {
        return view('components.project.project-details' ,[
            'categories' => $this->categories ,
            'meta' => $this->meta ,
        ]);
    }
}
