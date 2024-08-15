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
                                <a href="{{product_slug($item)}}">
                                    <img src="{{product_cover($item)}}" width="140" height="108" alt="{{product_name($item)}}" />
                                </a>
                                <div class="cart-box text-center">
                                    <a href="{{product_slug($item)}}">
                                        نمایش
                                    </a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h6>
                                    <a href="{{product_slug($item)}}">
                                        {{product_name($item)}}
                                    </a>
                                </h6>
                                <div class="d-flex justify-content-between align-items-center py-3" >
                                    <div class="price" >
                                        {{product_price($item)}}
                                    </div>
                                    <div class="quantity-box">
                                        {{product_stock($item)}}
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
