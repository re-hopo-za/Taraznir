@section('title', ' تارازنیر | مقاله‌ها')

@section('seo')
    @php
        echo socialsTagGenerator( 'page' ,(object)[
            'title'       => 'مقاله‌ها ',
            'url'         => url()->current() ,
          ])
    @endphp
@endsection

@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Blog' => '' ,'Slug' => '' ] ,'pageName' => 'Slug' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/blog.js') }}" defer></script>
@endsection


@section('sidebar','sidebar-right')

<div id="main-content" class="site-main clearfix blog-container" >
    <div id="content-wrap" class="container blog-page" >
        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="20" data-smobile="20" style="height:0"></div>
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap blog-page">
                @if( !empty( $blogs ) )
                    @foreach( $blogs as $blog )
                        @php(  $meta = $blog->meta()->pluck('value','key')->toArray() )
                        <article class="hentry data-effect">
                            <div class="post-media has-effect-icon offset-v-25 offset-h-24 data-effect-item clerafix">
                                <a href="/blog/{{ $blog->slug }}">
                                    <img src="{{ $blog->images( 'cover') }}" width="100%" alt="{{ $blog->title }}" style="max-height:450px;object-fit: cover;">
                                </a>
                                <div class="post-calendar">
                                    <span class="inner">
                                        <span class="entry-calendar">
                                            <span class="day">{{ $blog->created_at->format('d') }}</span>
                                            <span class="month">{{ $blog->created_at->format('F') }}</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="overlay-effect bg-color-1"></div>
                                <div class="elm-link" style="display: flex;justify-content: center;left: 50%;">
                                    <a  href="/blog/{{ $blog->slug }}" class="icon-1"></a>
                                </div>
                            </div>
                            <div class="post-content-wrap clearfix" dir="rtl">
                                <h2 class="post-title">
                                    <span class="post-title-inner">
                                        <a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
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
                                                            <a href="/blog/category/{{$cat->slug}}">
                                                                {{$cat->title}}
                                                            </a>
                                                        @endforeach
                                                    @else
                                                        بدون دسته بندی
                                                    @endif
                                                </span>
                                            </span>
                                            <span class="post-by-author item"><span class="inner"><span> توسط : {{ indexChecker( $meta ,'author' ) }}</span></span></span>
                                            <span class="comment item"><span class="inner"><a href="#">{{ count( $blog->comments ) > 0 ? count( $blog->comments ).' نظر ' : '' }}</a></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content post-excerpt">
                                    <p>
                                        {{$blog->summary}}
                                    </p>
                                </div>
                                <div class="post-read-more">
                                    <div class="post-link" dir="ltr">
                                        <a href="/blog/{{ $blog->slug }}">بیشتر </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endif
                {{$blogs->links('components.pagination')}}
            </div>
        </div>
        <div id="sidebar" style="min-width: 270px">
            <div id="inner-sidebar" class="inner-content-wrap">
                <livewire:components.search-box :term="''" :model="'Blog'" />
                <livewire:components.contact.social-widget />
                <livewire:components.recent-posts :posts="$recent" :title="'مقاله‌های اخیر'"/>
                <livewire:components.categories :categories="$categories" :allRoute="'blog'" :route="'CategoryBlog'" :specificCat="$category" />
            </div>
        </div>
    </div>
</div>
