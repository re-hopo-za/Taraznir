<?php

namespace App\Http\Livewire\Components\Service;

use Livewire\Component;

class ServiceSingle extends Component
{
    public ?object $service;
    public ?object $categories;
    public mixed $meta_desc;
    public mixed $meta_doing;

    public function mount( $service ,$categories  ,$meta_desc , $meta_doing )
    {
        $this->service     = $service;
        $this->categories  = $categories;
        $this->meta_desc   = $meta_desc;
        $this->meta_doing  = $meta_doing;
    }

    public function render()
    {
        return view('components.service.service-single' ,[
            'service'    => $this->service ,
            'categories' => $this->categories ,
            'meta_desc'  => $this->meta_desc ,
            'meta_doing' => $this->meta_doing
        ]);
    }

}
