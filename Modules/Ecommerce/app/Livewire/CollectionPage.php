<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use Lunar\Models\Collection as CollectionModel;
use Modules\Ecommerce\app\Traits\FetchesUrls;

class CollectionPage extends Component
{
    use FetchesUrls;

    public function mount(string $slug): void
    {
        $this->url = $this->fetchUrl(
            $slug,
            CollectionModel::class,
            [
                'element.thumbnail',
                'element.products.variants.basePrices',
                'element.products.defaultUrl',
            ]
        );

        if (! $this->url) {
            abort(404);
        }
    }

    /**
     * Computed property to return the collection.
     */
    public function getCollectionProperty(): mixed
    {
        return $this->url->element;
    }

    public function render(): View
    {
        return view('livewire.collection-page');
    }
}
