<div class="widget widget_lastest">
    <h2 class="widget-title" dir="rtl">
        <span style="font-size: 16px;font-weight: bold;color:#555"> {{$title}}</span>
    </h2>
    <ul class="lastest-posts data-effect clearfix">
        @if( !empty( $posts ) )
            @foreach( $posts as $post )
                <li class="clearfix" style="margin-top: 5px;">
                    <div class="text">
                        <h3>
                            <a href="{{route('SingleBlog' ,$post->slug )}}"> {{$post->title}} </a>
                        </h3>
                        <span class="post-date">
                            <span class="entry-date">
                                {{ !empty( $post->updated_at ) ? $post->updated_at->format('Y-m-d') : $post->creates_at->format('Y-m-d') }}
                            </span>
                        </span>
                    </div>
                    <div class="thumb data-effect-item has-effect-icon ">
                        <img src="{{$post->images('recent')}}" alt="{{$post->title}}" >
                    </div>
                </li>
            @endforeach
        @endif
    </ul>
</div>
