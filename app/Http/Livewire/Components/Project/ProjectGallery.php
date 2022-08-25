<?php

namespace App\Http\Livewire\Components\Project;

use Livewire\Component;

class ProjectGallery extends Component
{
    public ?object $project;

    public function mount( $project )
    {
        $this->project  = $project;
    }

    public function render()
    {
        return view('components.project.project-gallery' ,[
            'project'  => $this->project
        ]);
    }
}
