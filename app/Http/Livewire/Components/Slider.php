<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Slider extends Component
{
    public ?object $sliders;

    public function mount( $sliders )
    {
        $this->sliders = $sliders;
    }
    public function render()
    {
        return view('components.slider' ,[
            'sliders' => $this->sliders
        ]);
    }
}
