<?php

namespace Modules\Gallery\app\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class GallerySection extends Component
{

    public function render():View
    {
        return view('gallery::gallery-section');
    }
}
