<?php

namespace App\Http\Livewire\Components\Service;

use Livewire\Component;

class ServiceSingle extends Component
{
    public ?object $service;
    public ?object $categories;
    public ?object $meta;

    public function mount( $service ,$categories  ,$meta )
    {
        $this->service     = $service;
        $this->categories  = $categories;
        $this->meta        = $meta;
    }

    public function render()
    {
        return view('components.service.service-single' ,[
            'service'    => $this->service ,
            'categories' => $this->categories ,
            'meta'       => $this->meta ,
        ]);
    }

}
