<div class="widget widget_tags margin-top-55">
    <div class="widget-title">
        <span class="text-right" style="font-size: 16px;font-weight: bold;color:#555">دسته بندی</span>
    </div>
    <div class="tags-list">
        @if( !empty( $categories ) )
            @foreach( $categories as $category )
                <a href="{{ route( $route ,$category->slug ) }}">{{ $category->title }}</a>
            @endforeach
        @endif
    </div>
</div>
