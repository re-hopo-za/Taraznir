@section('title', ' تارازنیر | نمایشگاه')

@section('seo')
    @php
        echo socialsTagGenerator( 'page' ,(object)[
            'title'       => 'نمایشگاه ',
            'url'         => url()->current()
         ])
    @endphp
@endsection

@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Exhibition' => '' ] ,'pageName' => 'Exhibition' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/photoswipe/photoswipe.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/about.js') }}" defer></script>
    <script src="{{ asset('js/exhibition.js') }}" type="module"></script>
@endsection


<div id="main-content" class="site-main clearfix" style="padding-bottom: 200px;">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="35" data-smobile="35" style="height:39px"></div>
                    <div class="themesflat-headings style-1 text-center clearfix">
                        <h2 class="heading"> گالری  </h2>
                        <div class="sep has-icon width-125 clearfix">
                            <div class="sep-icon">
                                <span class="sep-icon-before sep-center sep-solid"></span>
                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                <span class="sep-icon-after sep-center sep-solid"></span>
                            </div>
                        </div>
                        <p class="sub-heading font-weight-400 text-808 max-width-680"> تصاویر نمایشگاه سال </p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="35" data-smobile="35" style="height:39px"></div>
                    <div class="row" style="margin-top: 60px;gap:15px;">
                        <div id="gallery" class="gallery" itemscope itemtype="http://schema.org/ImageGallery">
                            @if( !empty( $images ) && $images->count() > 0 )
                                @foreach( $images as $image )
                                    @php $meta = $image->meta()->pluck('value' ,'key')->toArray(); @endphp
                                    <figure class="col-md-4" style="margin-bottom: 50px;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="{{$image->attachment('attachments')}}" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                                            <img src="{{$image->attachment('attachments')}}" itemprop="thumbnail"  alt="{{indexChecker($meta,'title')}}">
                                        </a>
                                    </figure>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





