@section('title', ' تارازنیر | منابع')

@section('seo')
    @php
        echo socialsTagGenerator( 'page' ,(object)[
            'title'       => 'منابع ',
            'url'         => url()->current()
        ])
    @endphp
@endsection

@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Resource' => '' ] ,'pageName' => 'Resource' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/resource.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/resource.js') }}" defer></script>
@endsection


<div class="row-team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-headings style-1 text-center clearfix">
                    <h2 class="heading"> لیست آخرین استاندارد‌های اضافه شده </h2>
                    <div class="sep has-icon width-125 clearfix">
                        <div class="sep-icon">
                            <span class="sep-icon-before sep-center sep-solid"></span>
                            <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                            <span class="sep-icon-after sep-center sep-solid"></span>
                        </div>
                    </div>
                    <p class="sub-heading font-weight-400 text-808 max-width-680">با ما با دانستن اینکه پروژه خانه رویایی شما در دستان یک شرکت ساختمانی دارای مجوز کاملاً بیمه شده است، آرامش خاطر خواهید داشت.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="35" data-smobile="35"></div>
                <div class="themesflat-carousel-box data-effect has-bullets bullet-circle bullet24 clearfix" data-gap="30" data-column="4" data-column2="2" data-column3="1" data-auto="true">
                     <livewire:components.simple-slider :posts="$standards" :route="'standard'"/>
                </div>
                <div class="elm-button text-center">
                    <a href="/standard" class="themesflat-button bg-accent">تمامی استانداد‌ها</a>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-headings style-1 text-center clearfix">
                    <h2 class="heading"> لیست آخرین کاتالوگ‌ها </h2>
                    <div class="sep has-icon width-125 clearfix">
                        <div class="sep-icon">
                            <span class="sep-icon-before sep-center sep-solid"></span>
                            <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                            <span class="sep-icon-after sep-center sep-solid"></span>
                        </div>
                    </div>
                    <p class="sub-heading font-weight-400 text-808 max-width-680">با ما با دانستن اینکه پروژه خانه رویایی شما در دستان یک شرکت ساختمانی دارای مجوز کاملاً بیمه شده است، آرامش خاطر خواهید داشت.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="35" data-smobile="35"></div>
                <div class="themesflat-carousel-box data-effect has-bullets bullet-circle bullet24 clearfix" data-gap="30" data-column="4" data-column2="2" data-column3="1" data-auto="true">
                    <livewire:components.simple-slider :posts="$catalogs" :route="'catalog'" />
                </div>
                <div class="elm-button text-center">
                    <a href="/catalog" class="themesflat-button bg-accent">تمامی کاتالوگ‌ها</a>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div>
        </div>
    </div>
</div>




