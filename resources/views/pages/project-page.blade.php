@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Project' => '' ] ,'pageName' => 'Project' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/project.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/project.js') }}" defer></script>
@endsection

<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <livewire:components.isotope-list :posts="$projects" :categories="$categories" :category="$category" :route="'project'" />
                </div>
            </div>
        </div>
    </div>
</div>
