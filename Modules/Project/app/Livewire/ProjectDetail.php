<?php

namespace Modules\Project\app\Livewire;

use Illuminate\View\View;
use Jorenvh\Share\Share;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Core\app\Traits\CommonLivewireComponentTrait;
use Modules\Project\app\Models\Project;

class ProjectDetail extends Component
{
    use CommonLivewireComponentTrait;

    public string $object   = Project::class;
    public string $model    = 'project';
    protected $share        = '';
    public $item;
    public function mount($slug): void
    {
        $this->item = common_redis_first_query(
            "project:$slug",
           $this->object,
           ['category' ,'meta' ,'media'],
           ['slug' ,$slug]
        );

        if( !$this->item )
            abort(404);

        $this->share = (new Share)->page(
            route('project').$this->item->slug,
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
        return view('project::project-detail');
    }
}
