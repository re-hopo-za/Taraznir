@section('seo')
    {!! seo_tags_generator( $seo ,'blog' ,' تارازنیر | مقاله') !!}
@endsection

<x-theme::root :breads="[
    'title'  => blog_trans('Blogs'),
    'breads' => [
        ['title' => project_trans('Projects')],
    ],
]">
    <x-theme::sidebar>
        <div class="filter-box">
            <div class="d-flex justify-content-between align-items-center flex-wrap">

                <x-theme::page-filter />

                @if( $this->items && $this->items->isNotEmpty())
                    @php( $to = $this->items->perPage() * $this->items->currentPage() +  $this->items->perPage())
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

        @if( $this->items && $this->items->isNotEmpty())
            @foreach($this->items as $item)
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="/blog/{{$item->slug}}">
                                <img src="{{$item->images['single']??''}}" alt="{{$item->title}}" />
                            </a>
                            <div class="post-date">
                                {!!str_replace('_' ,'<br/>' ,jalali_to_gregorian_and_conversely($item->created_at ,format:'m _ F' ))!!}
                            </div>
                        </div>
                        <div class="lower-content" dir="rtl">
                            <div class="tags">
                                <span># دسته‌بندی‌ها</span>
                                @if($item->category)
                                    @foreach($item->category as $category)
                                        <a href="/blog/category/{{$category->slug}}">
                                            {{$category->title}}
                                        </a>
                                    @endforeach
                                @endif
                            </div>
                            <h3>
                                <a href="/blog/{{$item->slug}}">
                                    {{$item->title}}
                                </a>
                            </h3>

                            <ul class="post-meta d-flex align-items-center flex-wrap clearfix" dir="ltr">
                                <li>
                                                <span class="author">
                                                    <img src="images/resource/author-4.jpg" alt="{{$item->user?->name}}"/>
                                                </span>
                                    {{$item->user?->name}}
                                </li>
                                <li>
                                    <span class="icon flaticon-bubble-chat"></span>3
                                </li>
                                <li>
                                    <span class="icon flaticon-clock"></span>3 min Read
                                </li>
                            </ul>
                            <div class="text">
                                {{$item->summary}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$this->items->links(data: ['scrollTo' => false])}}
        @else
            <livewire:theme::layout.not-found :type="'post'" />
        @endif
    </x-theme::sidebar>

    <x-theme::sidebar dir="left">
        <livewire:theme::widgets.search-widget model="Blog" />
        <livewire:theme::widgets.category-widget model="Blog" :items="$this->categories" :categoryID="$this->category"  />
        <livewire:theme::widgets.posts-widget model="Blog" :object="$this->object"/>
    </x-theme::sidebar>
</x-theme::root>
