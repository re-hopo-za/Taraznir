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
    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="20" data-smobile="20" style="height:0"></div>
    <div id="content-wrap" class="container grid-item-main">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="grid-items" >
                    @if( !empty( $products ) )
                        @foreach( $products as $product )
                            <div  class="grid-item ">
                                <a class="inner" href="/product/{{$product->slug}}">
                                    <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                        <img  src="{{ $product->images( 'thumbnail') }}" alt="{{ $product->slug}}">
                                    </div>
                                    <div class="text-wrap">
                                        <h5 class="heading text-right " style="min-height: 24px;display: block;border-top: 1px solid #eee;padding-top: 10px;" >
                                            {{ $product->title}}
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="container">
                            <div class="row">
                                <p> موردی یافت نشد </p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div id="sidebar">
            <div id="inner-sidebar" class="inner-content-wrap">
                <livewire:components.search-box :model="'product'" />
                <livewire:components.categories :categories="$categories" :allRoute="'product'" :route="'CategoryProduct'" :specificCat="$category" />
            </div>
        </div>
    </div>
</div>
<div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="80" data-smobile="80" style="height:0"></div>
