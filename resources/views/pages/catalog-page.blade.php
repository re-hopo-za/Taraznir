@section('title', ' تارازنیر | کاتالوگ‌ها')

@php
    $meta = $seo?->meta->pluck('value','key')->toArray();
@endphp

@section('seo')
    @php
        echo socialsTagGenerator( 'page' ,(object)[
            'title'       => 'کاتالوگ‌ها ',
            'url'         => url()->current(),
            'keywords'    => indexChecker( $meta ,'keywords'),
            'description' => indexChecker( $meta ,'description')
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

<div id="main-content" class="site-main clearfix">
    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="20" data-smobile="20" style="height:0"></div>
    <div id="content-wrap" class="container grid-item-main" style="padding-bottom: 100px;">
        <div class="themesflat-headings style-1 text-center clearfix" style="margin-bottom:50px;">
            <h2 class="heading">نمونه کاتالوگ‌های منتخب تارازنیر  </h2>
            <div class="sep has-icon width-125 clearfix">
                <div class="sep-icon">
                    <span class="sep-icon-before sep-center sep-solid"></span>
                    <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                    <span class="sep-icon-after sep-center sep-solid"></span>
                </div>
            </div>
            <p class="sub-heading">علوم مهندسی و دانش روز را در سه زمینه: مشاوره و طراحی، اجرا، تولید به کار میبریم.</p>
        </div>
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="grid-items" >
                    @if( !empty( $catalogs ) )
                        @foreach( $catalogs as $catalog )
                            <div  class="grid-item ">
                                <a class="inner" href="/catalog/{{$catalog->slug}}">
                                    <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                        <img  src="{{ $catalog->images() }}" alt="{{ $catalog->slug}}">
                                    </div>
                                    <div class="text-wrap">
                                        <h5 class="heading text-right " style="min-height: 24px;display: block" >
                                            <a style="padding-top: 10px;cursor:pointer;" href="/catalog/{{$catalog->slug}}">{{ $catalog->title}}</a>
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="container">
                            <div class="row">
                                <p> موردی یافت نشد </p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>





