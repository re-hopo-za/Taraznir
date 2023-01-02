@section('title', ' تارازنیر | شرکت فنی و مهندسی  در طراحی و اجرای ارتینگ , صاعقه‌گیر')

@php
    $meta = $blog->meta->pluck('value','key')->toArray();
@endphp

@section('seo')
    @php
        echo socialsTagGenerator( 'page' ,(object)[
            'title'       => 'تارازنیر ',
            'url'         => url()->current() ,
            'keywords'    => indexChecker( $meta ,'keywords'),
            'description' => indexChecker( $meta ,'description')
        ])
    @endphp
@endsection

@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Blog' => '/blog','slug' => ''  ] ,'pageName' => 'slug' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/blog.js') }}" defer></script>
@endsection

@section('sidebar','sidebar-right')

<div id="main-content" class="site-main clearfix pt-5">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <livewire:components.blog.blog-single :blog="$blog" />
        </div>
        <div id="sidebar">
            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
            <div id="inner-sidebar" class="inner-content-wrap">
                <livewire:components.search-box :term="''" :model="'Blog'" />
                <livewire:components.contact.social-widget />
                <livewire:components.recent-posts :posts="$related" :title="'مقالات مرتبط'" />
                <livewire:components.categories :categories="$categories" :allRoute="'blog'" :route="'CategoryBlog'" :specificCat="''" />
            </div>
        </div>
    </div>
</div>
