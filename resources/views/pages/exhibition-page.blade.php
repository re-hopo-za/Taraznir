@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Exhibition' => '' ] ,'pageName' => 'Exhibition' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/about.js') }}" defer></script>
@endsection


<div id="main-content" class="site-main clearfix" style="padding-bottom: 200px;">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <div class="row">
                        @if( !empty( $images ) && $images->count() > 0 )
                            @foreach( $images as $image )
                                @php $meta = $image->meta()->pluck('value' ,'key')->toArray(); @endphp
                                <div class="col-md-4" style="margin-bottom: 50px;">
                                    <img src="{{$image->attachment('attachments')}}" alt="{{indexChecker($meta,'title')}}">
                                    <h6>{{indexChecker($meta,'title')}}</h6>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
