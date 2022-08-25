@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Product' => '' ] ,'pageName' => 'Product' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/product.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('/js/product.js') }}"></script>
@endsection

@section('sidebar','sidebar-right')


<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <livewire:components.isotope-list :posts="$products" :categories="$categories" :category="$category" :route="'product'" />
            </div>
        </div>

        <div id="sidebar">
            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60" style="height:0"></div>
            <div id="inner-sidebar" class="inner-content-wrap">
                <livewire:components.search-box :term="''" :model="'Product'" />
                <livewire:components.categories :categories="$categories" :route="'CategoryProduct'" />
            </div>
        </div>
    </div>
</div>
<div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="80" data-smobile="80" style="height:0"></div>
