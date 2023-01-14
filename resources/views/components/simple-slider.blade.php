<div class="owl-carousel owl-theme" >
    @if( !empty( $posts ) && $posts->count() > 0 )
        @foreach( $posts as $post )
            <div class="themesflat-team style-1 align-center clearfix">
                <div class="team-item">
                    <div class="inner">
                        <div class="thumb data-effect-item">
                            <img height="300px" src="{{$post->images('thumbnail')}}" alt="{{$post->title}}" style="object-fit: cover">
                            <ul class="socials clearfix">
                                @if( !empty( $post->categories ) && $post->categories->count() > 0 )
                                    @foreach( $post->categories as $category )
                                        <li>
                                            <a href="/{{$route}}/category/{{$category->slug}}">
                                                {{$category->title}}
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                            <div class="overlay-effect bg-color-4"></div>
                        </div>
                        <div class="text-wrap">
                            <a href="/{{$route}}/{{$post->slug}}" class="name">{{$post->title}}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
