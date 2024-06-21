<?php

namespace Modules\Theme\app\Livewire\Widgets;

use Illuminate\View\View;
use Livewire\Component;

class SupportWidget extends Component
{
    public function render():View
    {
        return view('theme::widgets.support-widget');
    }
}
