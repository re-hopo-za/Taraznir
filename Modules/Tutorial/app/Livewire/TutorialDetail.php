<?php

namespace Modules\Tutorial\app\Livewire;

use Illuminate\View\View;
use Jorenvh\Share\Share;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Core\app\Models\Option;
use Modules\Core\app\Traits\CommonLivewireComponentTrait;
use Modules\Tutorial\app\Models\Tutorial;

class TutorialDetail extends Component
{
    use CommonLivewireComponentTrait;

    public string $object   = Tutorial::class;
    public string $model    = 'blog';
    protected $share = '';
    public $item ,$categories ,$options ,$next ,$previous;


    public function mount($slug): void
    {
        $this->item = common_redis_first_query(
            "tutorial:$slug",
            $this->object,
            ['category' ,'meta' ,'media' ,'comments' ,'courses' ,'tutorialCourses'],
            ['slug' ,$slug]
        );

        if(!$this->item)
            abort(404);

        $this->categories = self::categories();

        $this->options = redis_handler( 'theme:options' ,function (){
            return
                Option::where('key' ,'theme_options')
                    ->with(['meta' ,'media'])
                    ->first();
        });

        $this->share = (new Share)->page(
            route('tutorial').$this->item->slug,
            $this->item->title,
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->getRawLinks();
    }

    #[Layout('theme::layout.app')]
    public function render(): View
    {

        return view('tutorial::tutorial-detail');
    }
}
