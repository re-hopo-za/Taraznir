@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Service' => '/service' ,'Slug' => '' ] ,'pageName' => 'Slug' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/service.js') }}" defer></script>
@endsection

@section('sidebar' ,'sidebar-right')

<div id="main-content" class="site-main clearfix">
    <livewire:components.service.service-single :service="$service" :categories="$categories"  :meta_desc="$meta_desc" :meta_doing="$meta_doing" />
</div>
