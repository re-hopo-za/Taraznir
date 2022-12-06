@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Product' => '/product' , $product->slug  => $product->slug ] ,'pageName' => 'مشخصات محصول'])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/product.js') }}"></script>
@endsection

@section('sidebar','sidebar-right')

<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60" style="height:80px"></div>
                <div class="row">
                    <livewire:components.product.product-details :product="$product" :meta="$meta" :comments="$comments"/>
                    <livewire:components.product.product-images :product="$product" />
                </div>

                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60" style="height:80px"></div>
                <livewire:components.product.product-description :product="$product" />
                <livewire:components.post-navigator :previous="$previous" :next="$next" :singleRoute="'SingleProduct'" :route="'Product'" />
                <livewire:components.comments :comments="$comments" />
                <livewire:components.comment-form :post="$product" :model="'App\Models\Product'" />
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60" style="height:80px"></div>
            </div>
        </div>

        <div id="sidebar">
            <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="0" data-smobile="0" style="height:80px"></div>
            <div id="inner-sidebar" class="inner-content-wrap">
                <livewire:components.attachment :post="$product" />
                <livewire:components.categories :categories="$categories" :allRoute="'product'" :route="'CategoryProduct'" :specificCat="''" />
                <livewire:components.recent-posts :posts="$recent" :title="'محصولات اخیر'"/>
            </div>
            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60" style="height:0px"></div>
        </div>
    </div>
</div>




