<div class="row-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-headings style-1 text-center clearfix">
                    <h2 class="heading" dir="rtl">استانداردهای روز دنیا:</h2>
                    <div class="sep has-icon width-125 clearfix">
                        <div class="sep-icon">
                            <span class="sep-icon-before sep-center sep-solid"></span>
                            <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                            <span class="sep-icon-after sep-center sep-solid"></span>
                        </div>
                    </div>
                    <p class="sub-heading" dir="rtl">تیم طراحی تارازنیر همواره پایبند به استانداردهای بین المللی بوده وبا حضور در کمیته های ملی و برگزاری سمینارهای علمی در جهت به روز کردن دستورالعملهای ملی کوشیده است.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="35" data-smobile="35"></div>
                <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="4" data-column2="2" data-column3="1" data-auto="false">
                    <div class="owl-carousel owl-theme">
                        @if( !empty( $standards ) && $standards->count() > 0 )
                            @foreach( $standards as $standard )
                                <div class="themesflat-image-box style-1 has-icon icon-right w65 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{$standard->images('thumbnail')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap" style="display: flex">
                                                <h5 class="heading" style="width:80%;"><a href="standard/{{$standard->slug}}" style="display: block;padding: 12px;line-height: 1.8;">{{$standard->title}}</a></h5>
                                                <span class="icon-wrap" style="width:20%;display: flex;justify-content: center;align-items: center;font-size: 30px;" >
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
                    <a href="{{route('Standard')}}" class="themesflat-button bg-accent">تمام استاندارد‌ها</a>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
            </div>
        </div>
    </div>
</div>
