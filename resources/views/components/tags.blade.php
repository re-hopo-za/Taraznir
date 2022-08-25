<div class="widget widget_tags margin-top-55">
    <div class="widget-title">
        <span class="text-right" style="font-size: 16px;font-weight: bold;color:#555">برچسب</span>
    </div>
    <div class="tags-list">
        @if( !empty( $tags ) )
            @foreach( $tags as $tag )
                <a href="{{ route( $route ,$tag->slug ) }}">{{ $tag->title }}</a>
            @endforeach
        @endif
    </div>
</div>
