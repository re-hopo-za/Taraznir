@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Service' => '' ] ,'pageName' => 'Service' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/service.js') }}" defer></script>
@endsection

@section('sidebar','sidebar-right')


<div id="main-content" class="site-main clearfix">
    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="20" data-smobile="20" style="height:0"></div>
    <div id="content-wrap" class="container grid-item-main">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="grid-items" >
                    @if( !empty( $services ) )
                        @foreach( $services as $service )
                            <div  class="grid-item ">
                                <a class="inner" href="/service/{{$service->slug}}">
                                    <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                        <img  src="{{ $service->images( 'thumbnail') }}" alt="{{ $service->slug}}">
                                    </div>
                                    <div class="text-wrap">
                                        <h5 class="heading text-right " style="min-height: 24px;display: block" >
                                            <a style="padding-top: 10px;cursor:pointer;" href="/service/{{$service->slug}}">{{ $service->title}}</a>
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
                <livewire:components.search-box :model="'service'" />
            </div>
        </div>
    </div>
</div>
<div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="80" data-smobile="80" style="height:0"></div>
