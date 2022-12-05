<?php

namespace App\Http\Livewire\Components\About;

use Livewire\Component;

class Partner extends Component
{
    public ?object $brands;

    public function mount( $brands )
    {
        $this->brands = $brands;
    }

    public function render()
    {
        return view('components.about.partner' ,[
            'brands' => $this->brands
        ]);
    }
}
