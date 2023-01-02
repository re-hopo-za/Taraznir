@section('title', ' تارازنیر | شرکت فنی و مهندسی  در طراحی و اجرای ارتینگ , صاعقه‌گیر')

@php
    $meta = $service->meta->pluck('value','key')->toArray();
@endphp

@section('seo')
    @php
        echo socialsTagGenerator( 'page' ,(object)[
            'title'       => 'تارازنیر ',
            'url'         => url()->current() ,
            'keywords'    => indexChecker( $meta ,'keywords'),
            'description' => indexChecker( $meta ,'description')
        ])
    @endphp
@endsection

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
