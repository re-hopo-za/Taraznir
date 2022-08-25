<?php

namespace App\Http\Livewire\Components\Resource;

use Livewire\Component;

class StandardSection extends Component
{

    public ?object $standards;

    public function mount( $standards )
    {
        $this->standards = $standards;
    }

    public function render()
    {
        return view('components.resource.standard-section');
    }
}
