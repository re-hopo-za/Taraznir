<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Testimonials extends Component
{
    public $testimonials;

    public function mount( $testimonials )
    {
        $this->testimonials = $testimonials;
    }

    public function render()
    {
        return view('components.testimonials' ,[
            'testimonials' => $this->testimonials ,
        ]);
    }
}
