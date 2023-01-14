<div class="row">
    @if( !empty( $posts ) )
        <div class="col-md-12" dir="rtl">
            <div class="themesflat-lines style-1 line-full line-solid clearfix"><span class="line"></span></div>
            <div class="themesflat-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div>
            <div class="themesflat-headings style-2 clearfix">
                <h2 class="heading">{{ $title  }}</h2>
                <div class="sep has-width w80 accent-bg margin-top-3 clearfix"></div>
            </div>
            <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div>

            <div class="themesflat-carousel-box clearfix" data-gap="30" data-column="4" data-column2="2" data-column3="1" data-auto="false">
                <div class="owl-carousel owl-theme">
                    @foreach( $posts as $post )
                        <div class="project-item">
                            <div class="inner">
                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                    <img src="{{ $post->images( 'thumbnail') }}" alt="{{$post->title}}" style="width: 100px;height: 60px;">
                                    <div class="text-wrap text-center">
                                        <h5 class="heading"><a href="/{{get_class($posts)}}/{{$post->slug}}">{{$post->title}}</a></h5>
                                        <div class="elm-meta">
                                            @if( !empty( $post->categories ) )
                                                @foreach( $post->categories as $cat )
                                                    <span><a href="/{{get_class($posts)}}/category/{{$cat->slug}}">{{$cat->title}}</a></span>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="elm-link">
                                        <a href="#" class="icon-1"></a>
                                    </div>
                                    <div class="overlay-effect bg-color-3"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
        </div>
    @endif
</div>





