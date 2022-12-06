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
                    <div class="container" style="margin-top: 50px;">
                        <div class="row" style="gap: 20px;justify-content: center">
                            @if( !empty( $services ) )
                                @foreach( $services as $service )
                                    <div style="box-sizing: border-box;box-shadow: 0 0 5px #999;padding: 10px;" class="col-md-3 project-item @foreach( $service->categories as $cat ) {{ $service->slug }} @endforeach ">
                                        <div class="inner">
                                            <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                <img style="width: 100%;" src="{{ $service->images( 'thumbnail') }}" alt="{{ $service->slug}}">
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading text-right " style="min-height: 24px;display: block" >
                                                    <a style="padding-top: 10px;cursor:pointer;" href="service/{{$service->slug}}">{{ $service->title}}</a>
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
    </div>
</div>
