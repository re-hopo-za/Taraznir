<div class="row-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-headings style-1 text-center clearfix">
                    <h2 class="heading">بهترین خدمات </h2>
                    <div class="sep has-icon width-125 clearfix">
                        <div class="sep-icon">
                            <span class="sep-icon-before sep-center sep-solid"></span>
                            <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                            <span class="sep-icon-after sep-center sep-solid"></span>
                        </div>
                    </div>
                    <p class="sub-heading">خدمات ساختمانی طیف کاملی از خدمات ساخت و ساز را از طراحی اولیه تا اتمام پروژه ارائه می دهد.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="35" data-smobile="35"></div>
                <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="false">
                    <div class="owl-carousel owl-theme">
                        @if( !empty( $services ) && $services->count() > 0 )
                            @foreach( $services as $service )
                                <div class="themesflat-image-box style-1 has-icon icon-right w65 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{$service->images('thumbnail')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="service/{{$service->slug}}" style="display: block;width: 284px!important;min-width: 284px;padding: 12px;line-height: 1.8;text-align: right;">{{$service->title}}</a></h5>
                                                <span class="icon-wrap">
                                                    <i class="fa fa-angle-left"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="35" data-smobile="35"></div>
                <div class="elm-button text-center">
                    <a href="{{route('Service')}}" class="themesflat-button bg-accent">تمام خدمات</a>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
            </div>
        </div>
    </div>
</div>
