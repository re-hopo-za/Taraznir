<?php

namespace Modules\Tutorial\app\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class TutorialSection extends Component
{
    public function render():View
    {
        return view('tutorial::tutorial-section');
    }
}
