@section('title', ' تارازنیر | پروژه‌‌ها')

@php
    $meta = $project->meta->pluck('value','key')->toArray();
@endphp

@section('seo')
    @php
        echo socialsTagGenerator( 'page' ,(object)[
            'title'       => 'پروژه‌‌ها ',
            'url'         => url()->current() ,
            'keywords'    => indexChecker( $meta ,'keywords'),
            'description' => indexChecker( $meta ,'description')
        ])
    @endphp
@endsection

@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Project' => '/project' ,'Slug' => '' ] ,'pageName' => 'Slug' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/project.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/project.js') }}" defer></script>
@endsection



@section('sidebar','sidebar-right')

<div id="main-content" class="site-main clearfix pt-5 pb-5 mb-5">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div class="detail-gallery">
                <div class="themesflat-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div>
                <livewire:components.project.project-gallery :project="$project" />

                <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40" data-smobile="40"></div>
                <livewire:components.project.project-description :project="$project"/>

                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                <livewire:components.related-posts :posts="$related" :title="'پروژه‌های مرتبط'"/>
            </div>
        </div>
        <div id="sidebar" style="min-width: 270px">
            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
            <div id="inner-sidebar" class="inner-content-wrap">
                <div class="detail-inner-wrap">
                    <livewire:components.project.project-details :meta="$meta" :categories="$categories" />
                </div>
            </div>
        </div>
    </div>
</div>




