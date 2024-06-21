<?php

namespace Modules\Tutorial\app\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Core\app\Traits\CommonLivewireComponentTrait;
use Modules\Tutorial\app\Models\Tutorial;

class TutorialPage extends Component
{
    use CommonLivewireComponentTrait;

    public string $object = Tutorial::class;
    public string $model  = 'tutorial';
    public string $config = 'tutorial.section_limit';
    public $listeners     = ['setSearching' ,'setCategory'];
    protected array $with = ['category' ,'tutorialCourses' ,'meta' ,'media' ,'user'];
    public $categories;


    public function mount(): void
    {
        $this->limit      = config($this->config ,10);
        $this->categories = self::categories();
    }


    #[Layout('theme::layout.app')]
    public function render(): View
    {
        $this->renderQuery();
        return view('tutorial::tutorial-page',[
            'seo' => main_pages_seo()
        ]);
    }
}
