@section('title', ' تارازنیر | خانه')

@php
    $meta = $seo?->meta->pluck('value','key')->toArray();
@endphp

@section('seo')
    @php
        echo socialsTagGenerator( 'page' ,(object)[
            'title'       => 'خانه ',
            'url'         => url()->current(),
            'keywords'    => indexChecker( $meta ,'keywords'),
            'description' => indexChecker( $meta ,'description')
        ])
    @endphp
@endsection


@section('styles')
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('js/home.js') }}" defer></script>
@endsection





<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <livewire:components.slider :sliders="$sliders" />
                    <livewire:components.about.icon-box-horizontal />
                    <livewire:components.about.about-section />
                    <livewire:components.resource.standard-section :standards="$standards" />
                    <livewire:components.project.project-section :projects="$projects"/>
                    <livewire:components.service.service-icon-box/>
                    <livewire:components.testimonials :testimonials="$testimonials"/>
                    <livewire:components.contact.quotes/>
                    <livewire:components.product.product-section :products="$products"/>
                    <livewire:components.contact.f-a-qs/>
                    <livewire:components.about.partner :brands="$brands" />
                </div>
            </div>
        </div>
    </div>
</div>

