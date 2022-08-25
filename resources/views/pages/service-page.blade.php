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
                    <livewire:components.isotope-list :posts="$services" :categories="$categories" :category="$category" :route="'service'" />
                </div>
            </div>
        </div>
    </div>
</div>
