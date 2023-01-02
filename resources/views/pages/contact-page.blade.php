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

@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Contact' => '' ] ,'pageName' => 'Contact' ])
@endsection


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endsection

<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">

                    <livewire:components.contact.details/>
                    <livewire:components.contact.contact-section />

                </div>
            </div>
        </div>
    </div>
</div>
