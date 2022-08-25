<?php

namespace App\Http\Livewire\Components\Service;

use Livewire\Component;

class ServiceSection extends Component
{
    public ?object $services;

    public function mount( $services )
    {
        $this->services = $services;
    }

    public function render()
    {
        return view('components.service.service-section' ,[
            'services' => $this->services
        ]);
    }
}
