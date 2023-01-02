@section('title', ' تارازنیر | شرکت فنی و مهندسی  در طراحی و اجرای ارتینگ , صاعقه‌گیر')

@section('seo')
    @php
        echo socialsTagGenerator( 'page' ,(object)[
            'title'       => 'تارازنیر ',
            'url'         => url()->current() ,
            'keywords'    => 'ارتینگ , صاعقه‌گیر پسیو, صاعقه‌گیر اکتیو , میله ارت , صفحه مسی , جوش کدولد ',
            'description' => 'طراحی و نصب سیستم های صاعقه گیر و ارتینگ ونصب سیستم های صاعقه گیر و ارتینگ ونصب سیستم های صاعقه گیر و ارتینگ ونصب سیستم های صاعقه گیر و ارتینگ ونصب سیستم های صاعقه  گیر و ارتینگ طراحی ونصب سیستم های صاعقه گیر و ارتینگ',
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

