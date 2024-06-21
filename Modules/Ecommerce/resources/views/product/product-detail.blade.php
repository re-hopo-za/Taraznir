<div class="product-detail-page" style="margin-bottom: 8rem">
    <section class="page-title">
        <div class="auto-container">
            <h2>
                @lang('ecommerce::product.Detail product')
            </h2>
            <ul class="bread-crumb clearfix">
                <li>
                    <a href="/">
                        @lang('ecommerce::product.Home')
                    </a>
                </li>
                <li>
                    <a href="/product">
                        @lang('ecommerce::product.Products')
                    </a>
                </li>
                <li>
                    {{$this->item->title}}
                </li>
            </ul>
        </div>
    </section>
    <section class="shop-detail-section">
        <div class="auto-container">
            <div class="upper-box">
                <div class="row clearfix">
                    <div class="gallery-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column ms-xl-5">
                            <div class="carousel-outer">
                                <div class="swiper-container content-carousel" style="overflow: hidden">
                                    <div class="swiper-wrapper product-container" id="product-container">
                                        @foreach($this->item->media as $mdeia)
                                            <div class="swiper-slide">
                                                <figure class="image">
                                                    <a href="javascript:void(0)"
                                                       data-pswp-src="{{$mdeia->getFullUrl()}}"
                                                       data-pswp-height="1666"
                                                       data-pswp-width="1666"
                                                    >
                                                        <img src="{{$mdeia->getFullUrl()}}" alt="{{$this->item->title}}">
                                                    </a>
                                                </figure>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="swiper-container thumbs-carousel" style="height: 100%;">
                                    <div class="swiper-wrapper">
                                        @foreach($this->item->media as $mdeia)
                                            <div class="swiper-slide">
                                                <figure class="thumb">
                                                    <img src="{{$mdeia->getFullUrl()}}" alt="{{$this->item->title}}">
                                                </figure>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h3>
                                {{$this->item->title}}
                            </h3>
                            @if($this->item->comments)
                                <div class="rating">
                                    <i>({{$comments_count = $this->item->comments->count()}}) @lang('ecommerce::product.Customer review')</i>
                                </div>
                            @endif

                            <div class="price">
                                @if($regular_price = get_meta_value_by_key($item ,'regular_price'))
                                    <span>
                                        {{$regular_price}}
                                    </span>
                                @endif
                                {{$price = get_meta_value_by_key($item ,'price' ,'تماس بگیرید')}}
                                @if($regular_price && is_numeric($price))
                                    <i>
                                        {{ (int)(($price / $regular_price) * 100)}}%
                                    </i>
                                @endif
                            </div>
                            <div class="text">
                                {{$this->item->summary}}
                            </div>

                            <div class="categories">
                                <span>
                                    @lang('ecommerce::product.Categories'):
                                </span>
                                @foreach($item->category as $category)
                                    {{$category->title. ($loop->iteration > 1 ? ',' : '' )}}
                                @endforeach
                            </div>
                            <div class="categories">
                                 <span>
                                    @lang('ecommerce::product.Stock'):
                                </span>
                                {{get_meta_value_by_key($item ,'stock' ,'موجود')}}
                            </div>
                            <ul class="social-box mt-3">
                                <x-theme::share-post :links="$this->share" ulStyle="display:flex;align-items: center; gap: 5px;" :title="true"/>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lower-box" dir="rtl">
                <div class="product-info-tabs">
                    <div class="prod-tabs tabs-box">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#prod-details" class="tab-btn active-btn">
                                @lang('ecommerce::product.Detail product')
                            </li>
                            <li data-tab="#prod-review" class="tab-btn">
                                @lang('ecommerce::product.Comments')
                                @if($comments_count)
                                    <b>({{$comments_count}})</b>
                                @endif
                            </li>
                        </ul>

                        <div class="tabs-content">
                            <div class="tab active-tab" id="prod-details">
                                <div class="content">
                                    {!! $item->content !!}
                                </div>
                            </div>

                            <div class="tab" id="prod-review">
                                <div class="rbt-shadow-box review-wrapper mt--30" id="review">
                                    <div>
                                        <livewire:theme::components.comment-list :title="false" type="Product" :id="$item->id"/>
                                        <livewire:theme::forms.comment-form :model="Product::class" :id="$item->id" :title="true"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
