<div class="row-testimonials parallax-2">
    <div style="backdrop-filter:blur(3px);width: 100%;padding: 0 50px;">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-carousel-box has-arrows arrow-center arrow-circle offset-v-24 clearfix" data-gap="30" data-column="1" data-column2="1" data-column3="1" data-auto="true">
                    <div class="owl-carousel owl-theme">

                        @if( !empty( $testimonials ) && $testimonials->isNotEmpty() )
                            @foreach( $testimonials as $testimonial )
                                <div class="themesflat-testimonials style-1 max-width-70 align-center has-width w100 circle border-solid clearfix">
                                    <div class="testimonial-item">
                                        <div class="inner">
                                            <div class="icon-wrap">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <blockquote class="text">
                                                <p>“
                                                    {{$testimonial->description}}
                                                    ”</p>
                                                <div class="sep has-width w80 accent-bg clearfix"></div>
                                                <h6 class="name">{{$testimonial->name}}</h6>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="68" data-mobile="60" data-smobile="60"></div>
            </div>
        </div>
    </div>
</div>

