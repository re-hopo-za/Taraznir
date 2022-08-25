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
                <livewire:components.categories :categories="$categories" :route="'CategoryBlog'" />
            </div>
        </div>
    </div>
</div>
