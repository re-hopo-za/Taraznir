<section class="main-slider-two">
    <div class="main-slider-carousel owl-carousel owl-theme">
        @if($items)
            @foreach($items as $item)
                <div class="slide">
                    <div class="image-layer" style="background-image: url({{$item->images['origin'] ?? ''}})"></div>
                    <div class="auto-container" style="margin:initial">
                        <div class="content-box">
                            <div class="box-inner">
                                <div class="title">{{get_meta_value_by_key($item ,'top_title')}}</div>
                                <h3>{{get_meta_value_by_key($item ,'title')}}</h3>
                                <div class="text">{{get_meta_value_by_key($item ,'under_title')}}</div>
                                <div class="price"><span>{{get_meta_value_by_key($item ,'top_button')}}</span></div>

                                <div class="button-box">
                                    <a href="{{get_meta_value_by_key($item ,'link')}} " class="theme-btn btn-style-one">
                                        <span class="icon flaticon-left-arrow"></span>
                                        {{get_meta_value_by_key($item ,'button_title')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @break(true)
            @endforeach
        @endif
    </div>
</section>
