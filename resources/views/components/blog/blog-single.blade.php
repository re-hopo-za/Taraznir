<div id="inner-content" class="inner-content-wrap">
    @php(  $meta = $blog->meta()->pluck('value','key')->toArray() )
    <article class="hentry data-effect">
        <div class="post-media data-effect-item has-effect-icon offset-v-25 offset-h-24 clerafix">
            <img width="100%" src="{{$blog->images('cover')}}" alt="Image">
            <div class="post-calendar">
                <span class="inner">
                    <span class="entry-calendar">
                        <span class="day">{{ $blog->created_at->format('d') }}</span>
                        <span class="month">{{ $blog->created_at->format('F') }}</span>
                    </span>
                </span>
            </div>
        </div>
        <div class="post-content-wrap clearfix" dir="rtl">
            <h2 class="post-title">
                <span class="post-title-inner">
                    {{$blog->title}}
                </span>
            </h2>
            <div class="post-meta">
                <div class="post-meta-content">
                    <div class="post-meta-content-inner">
                        <span class="post-date item">
                            <span class="inner">
                                دسته بندی :
                                @if( !empty( $blog->categories ) && $blog->categories->count() > 0 )
                                    @foreach( $blog->categories as $cat )
                                        <a href="/blog/category{{$cat->slug}}">
                                            {{$cat->title}}
                                        </a>
                                    @endforeach
                                @else
                                    بدون دسته بندی
                                @endif
                            </span>
                        </span>
                        <span class="post-by-author item"><span class="inner">  توسط : {{ indexChecker( $meta ,'author' ) }} </span></span>
                        <span class="comment item"><span class="inner"><a href="#">{{ count( $blog->comments ) > 0 ? count( $blog->comments ) .' نظر ' : '' }}</a></span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="post-content post-excerpt margin-bottom-43">
            {!! $blog->content !!}
        </div>
        <div class="post-tags-socials clearfix">
            <div class="post-tags ">
                <span>Tags :</span>
                @if( !empty( $blog->tags ) && $blog->tags->count() > 0 )
                    @foreach( $blog->tags as $tag )
                        <a href="/blog/tag/{{$tag->slug}}">
                            {{$cat->title}}
                        </a>
                    @endforeach
                @endif
            </div>
            <div class="post-socials ">
                <a href="#" class="facebook"><span class="fa fa-facebook-square"></span></a>
                <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                <a href="#" class="linkedin"><span class="fa fa-linkedin-square"></span></a>
                <a href="#" class="pinterest"><span class="fa fa-pinterest-p"></span></a>
            </div>
        </div>
    </article>

    <livewire:components.post-navigator :previous="$previous" :next="$next" :singleRoute="'SingleBlog'" :route="'Blog'" />
    <livewire:components.comments :comments="$comments" />
    <livewire:components.comment-form :post="$blog" :model="'App\Models\Blog'"/>
</div>
