<?php

namespace App\Http\Livewire\Components\Project;

use Livewire\Component;

class ProjectSection extends Component
{
    public ?object $projects;

    public function mount( $projects )
    {
        $this->projects = $projects;
    }

    public function render()
    {
        return view('components.project.project-section' ,[
            'projects' => $this->projects
        ]);
    }
}
