@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Service' => '' ] ,'pageName' => 'Service' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/service.js') }}" defer></script>
@endsection

<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content" style="margin-bottom: 100px;">
                    @if( !empty( $services ) )
                        @foreach( $services as $service )
                            <div class="project-item @foreach( $service->categories as $cat ) {{ $service->slug }} @endforeach ">
                                <div class="inner">
                                    <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                        <img src="{{ $service->images( 'thumbnail') }}" alt="{{ $service->slug}}">
                                        <div class="elm-link" style="display: flex;width: 100%;justify-content: center;">
                                            <a href="service/{{$service->slug}}" class="icon-1"></a>
                                        </div>
                                        <div class="overlay-effect bg-color-3"></div>
                                    </div>
                                    <div class="text-wrap">
                                        <h5 class="heading text-right " style="min-height: 24px;display: block" >
                                            <a href="service/{{$service->slug}}">{{ $service->title}}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
