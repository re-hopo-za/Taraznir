<?php

namespace Modules\Misc\app\Livewire\Pages;


use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ContactPage extends Component
{

    #[Layout('theme::layout.app')]
    public function render(): View
    {
        return view('misc::pages.contact-page' ,[
            'seo' => main_pages_seo()
        ]);
    }
}
