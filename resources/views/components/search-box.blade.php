<div class="widget widget_search margin-top-55">

    <form action="#" method="get" role="search" class="search-form style-1">
        <input type="search" class="search-field" placeholder="جستجو..." value="" name="s" title="Search for" wire:model="term">
        <button class="search-submit" type="submit" title="Search">جستجو</button>
    </form>

    <div wire:loading class="text-right">در حال جستجو ....</div>
    <div wire:loading.remove class="search-items">
        @if ($term == "" )
            <div class="text-gray-500 text-sm text-right">
                برای جستجو کلمه مورد نظر را وارد کنید
            </div>
        @else
            @if( $items->isEmpty() )
                <div class="text-gray-500 text-sm">
                    موردی یافت نشد
                </div>
            @else
                @foreach( $items as $item )
                    <a href="{{$route}}/{{$item->slug}}" class="search-item">
                        <div class="right">
                            <img src="{{$item->images('thumbnail')}}" alt="{{$item->title}}">
                        </div>
                        <div class="left">
                            <h6 class="text-lg text-gray-900 text-bold">{{$item->cover}}</h6>
                            <p class="text-gray-500 text-sm">{{$item->title}}</p>
                            <span class="text-gray-500">{{$item->summary}}</span>
                        </div>
                    </a>
                @endforeach
            @endif
        @endif
    </div>

</div>
