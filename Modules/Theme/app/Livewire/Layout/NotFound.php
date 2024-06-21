<?php

namespace Modules\Theme\app\Livewire\Layout;

use Illuminate\View\View;
use Livewire\Component;

class NotFound extends Component
{
    public ?string $type = '';

    public function mount($type): void
    {
        $this->type = $type;
    }

    public function clearFilter(): void
    {
        $this->dispatch('searching' ,null );
    }

    public function render(): View
    {
        return view('theme::layout/not-found');
    }
}
