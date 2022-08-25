<?php

namespace App\Http\Livewire\Components\Project;

use Livewire\Component;

class ProjectDescription extends Component
{
    public ?object $project;
    public function mount( $project )
    {
        $this->project = $project;
    }

    public function render()
    {
        return view('components.project.project-description' ,[
            'project' => $this->project ,
        ]);
    }
}
