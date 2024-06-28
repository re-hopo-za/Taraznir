@section('seo')
    {!! seo_tags_generator( $seo ,'project' ,' تارازنیر | پروژه') !!}
@endsection

<x-theme::root :breads="[
    'title'  => project_trans('Projects'),
    'breads' => [
        ['title' => project_trans('Projects')],
    ],
]">
    <x-theme::sidebar>
        <div class="filter-box">
            <div class="d-flex justify-content-between align-items-center flex-wrap">

                <x-theme::page-filter />

                @if( $this->items && $this->items->isNotEmpty())
                    @php( $to = $this->items->perPage() * $this->items->currentPage() + $this->items->perPage())
                    @php( $from = $to - $this->items->perPage())

                    <div class="left-box d-flex align-items-center">
                        <div class="results">
                            نمایش
                            {{$from}}-{{$this->items->lastPage() === $this->items->currentPage() ? $this->items->total() : $to}}
                            از
                            {{$this->items->total()}}
                            نتیجه
                        </div>
                    </div>

                @endif
            </div>
        </div>
        <div class="row clearfix">
            @if( $this->items && $this->items->isNotEmpty())
                @foreach($this->items as $item)
                    <div class="service-block col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="/project/{{$item->slug}}">
                                    <img src="{{$item->images['cover']??''}}" alt="{{$item->title}}" />
                                </a>
                            </div>
                            <div class="lower-content">
                                <h5>
                                    <a href="/project/{{$item->slug}}">
                                        {{$item->title}}
                                    </a>
                                </h5>
                                <div class="text">
                                    {{$item->summary}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
        {{$this->items->links(data: ['scrollTo' => false])}}
        @else
            <livewire:theme::layout.not-found :type="'post'" />
        @endif
    </x-theme::sidebar>

    <x-theme::sidebar dir="left">
        <livewire:theme::widgets.search-widget :model="'Project'" />
        <livewire:theme::widgets.category-widget :model="'Project'" :items="$this->categories" />
    </x-theme::sidebar>
</x-theme::root>
