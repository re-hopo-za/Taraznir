<section class="news-section-three">
    <div class="auto-container">
        <div class="inner-container d-flex justify-content-between flex-wrap align-items-center mb-4">
            <div class="button-box">
                <a href="/product" class="theme-btn btn-style-twelve clearfix">
                      <span class="btn-wrap">
                        <span class="text-one">نمایش تمامی محصولات</span>
                        <span class="text-two">نمایش تمامی محصولات</span>
                      </span>
                </a>
            </div>
            <div class="sec-title centered mb-0" >
                <h4>
                    <b>محصولات</b> <span>اخیر </span>
                </h4>
            </div>
        </div>

        <div class="row clearfix">
            @foreach($items as $item)
                <div class="shop-item col-lg-3 col-md-6 col-sm-12 p-3" dir="rtl">
                    <div class="content p-3" style="border: 1px solid #eeee;">
                        <div class="inner-box">
                            <div class="image">
                                <a href="/product/{{$item->slug}}">
                                    <img src="{{$item->images['thumbnail'] ?? ''}}" width="140" height="108" alt="{{$item->title}}" />
                                </a>
                                <div class="cart-box text-center">
                                    <a href="/product/{{$item->slug}}">
                                        نمایش
                                    </a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h6>
                                    <a href="/blog/{{$item->slug}}">
                                        {{$item->title}}
                                    </a>
                                </h6>
                                <div class="d-flex justify-content-between align-items-center py-3" >
                                    <div class="price" >
                                        @if($regular_price = get_meta_value_by_key($item ,'regular_price'))
                                            <span>
                                            {{$regular_price}}
                                        </span>
                                        @endif
                                        {{$price = get_meta_value_by_key($item ,'price' ,'تماس بگیرید')}}
                                    </div>

                                    <div class="quantity-box">
                                        {{get_meta_value_by_key($item ,'stock' ,'موجود')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach
        </div>
    </div>
</section>
