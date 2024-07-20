<?php

namespace Modules\User\app\Livewire;

use Exception;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Core\app\Traits\AlertTrait;

class ProfilePage extends Component
{
    use AlertTrait;


    /**
     * @throws Exception
     */
    #[Layout('theme::layout.app')]
    public function render():View
    {
        return view('user::profile-page');
    }
}
