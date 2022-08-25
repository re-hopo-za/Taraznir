<div class="container" style="margin-bottom: 100px;">
    <div class="row">
        <div class="col-md-12 project-list">
            <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
            <ul class="themesflat-filter style-1 clearfix">
                <li class="{{ empty( $category ) ? 'active' : '' }}"><a href="#" data-filter="*">همه دسته‌ بندی‌ها</a></li>
                @if( !empty( $categories ) )
                    @foreach( $categories as $cat )
                        <li class="{{ $cat->slug == $category ? 'active' : '' }}" >
                            <a href="javascript:void(0)" data-filter=".{{ $cat->slug }}">| {{ $cat->title }}</a>
                        </li>
                    @endforeach
                @endif
            </ul>
            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
            <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                @if( !empty( $posts ) )
                    @foreach( $posts as $post )
                        <div class="project-item {{$post->categories->implode('slug', ', ') }}">
                            <div class="inner">
                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                    <img src="{{ $post->images( 'thumbnail') }}" alt="{{ $post->slug}}">
                                    <div class="elm-link" style="display: flex;width: 100%;justify-content: center;">
                                        <a href="{{$route}}/{{$post->slug}}" class="icon-1"></a>
                                    </div>
                                    <div class="overlay-effect bg-color-3"></div>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading text-right " style="min-height: 24px;display: block" >
                                        <a href="{{$route}}/{{$post->slug}}">{{ $post->title}}</a>
                                    </h5>
                                    <div class="elm-meta" style="min-height: 24px;" >
                                        @if( !empty( $post->categories ) )
                                            @foreach( $post->categories as $cat )
                                                <span>
                                                    <a href="{{$route}}/category/{{$cat->slug}}"> {{ $cat->title }}</a>
                                                 </span>
                                                {{ $loop->index > 0 ? '|' : '' }}
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
