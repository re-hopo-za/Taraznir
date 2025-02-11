@section('seo')
    {!! seo_tags_generator( $item ,null ,"$item->slug تارازنیر |  مقاله | " ,true) !!}
@endsection

<x-theme::root :breads="[
    'title'  => blog_trans('Blog detail'),
    'breads' => [
        ['title' => blog_trans('Blogs') ,'a' => '/blog'],
        ['title' => $item->title]
    ],
]">
    <x-theme::sidebar>
        <div class="blog-detail">
            <div class="inner-box">
                <div class="image">
                    <img src="{{$item->images['single']??''}}" alt="{{$item->title}}" />
                    <div class="post-date">
                        {!!str_replace('_' ,'<br/>' ,jalali_to_gregorian_and_conversely($item->created_at ,format:'m _ F' ))!!}
                    </div>
                </div>

                <div class="lower-content" dir="rtl">
                    <div class="blog-extra-details">
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
                        <ul class="post-meta d-flex align-items-center flex-wrap clearfix" dir="rtl">
                            <li>
                                <span class="author">
                                    <img src="{{$item->author?->getAvatarAttribute()}}" alt="{{$item->user?->name}}"/>
                                </span>
                                {{$item->user?->name}}
                            </li>
                            @if($item->comments->count())
                                <li>
                                    <span class="icon flaticon-bubble-chat"></span>
                                    {{$item->comments->count()}}
                                </li>
                            @endif
                            <li>
                                <span class="icon flaticon-clock"></span>
                                {{get_meta_value_by_key($item ,'read_time' ,5)}}
                                دقیقه
                            </li>
                        </ul>
                    </div>
                    <div class="text" style="margin-bottom: 160px">
                        {!!$item->content!!}
                    </div>

                    <x-theme::share-post :links="$this->share"/>
                    <x-theme::more-posts :next="$this->next" :previous="$this->previous" />
                </div>

                <x-comments::index :model="$item" />
            </div>
        </div>
    </x-theme::sidebar>

    <x-theme::sidebar dir="left">
        <livewire:theme::widgets.search-widget model="Blog" :isDetailPage="true"/>
        <livewire:theme::widgets.category-widget model="Blog" :items="$this->categories" :isDetailPage="true"/>
        <livewire:theme::widgets.posts-widget model="Blog" :object="$this->object"/>
    </x-theme::sidebar>
</x-theme::root>







