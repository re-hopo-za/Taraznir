@section('seo')
    {!! seo_tags_generator( $item ,null ,"$item->slug تارازنیر |  محصولات | " ,true) !!}
@endsection

<x-theme::root :sidebar="false" :breads="[
    'title'  => ecommerce_trans('Product detail'),
    'breads' => [
        ['title' => ecommerce_trans('Products') ,'a' => '/product'],
        ['title' => product_name($item)]
    ],
]">
    <div class="product-detail-page">
        <section class="shop-detail-section">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="gallery-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column ms-xl-5">
                                <div class="carousel-outer">
                                    <div class="swiper-container content-carousel" style="overflow: hidden">
                                        <div class="swiper-wrapper product-container" id="product-container">
                                            @foreach($this->item->getMedia('images') as $media)
                                                <div class="swiper-slide">
                                                    <figure class="image">
                                                        <a href="javascript:void(0)"
                                                           data-pswp-src="{{$media->getFullUrl()}}"
                                                           data-pswp-height="1666"
                                                           data-pswp-width="1666"
                                                        >
                                                            <img src="{{$media->getFullUrl()}}"
                                                                 alt="{{product_name($item)}}"
                                                            >
                                                        </a>
                                                    </figure>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="swiper-container thumbs-carousel" style="height: 100%;">
                                        <div class="swiper-wrapper">
                                            @foreach($this->item->getMedia('images') as $media)
                                                <div class="swiper-slide">
                                                    <figure class="thumb">
                                                        <img src="{{$media->getFullUrl()}}"
                                                             alt="{{product_name($item)}}"
                                                        >
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
                                    {{product_name($item)}}
                                </h3>
                                @if($this->item->comments)
                                    <div class="rating">
                                        <i>({{$comments_count = $this->item->comments->count()}}) {{ecommerce_trans('Customer review')}}</i>
                                    </div>
                                @else
                                   @php  $comments_count = 'بدون نظر'  @endphp
                                @endif

                                <div class="price">
                                    {{product_price($item)}}
                                </div>
                                <div class="text content">
                                    {!! $item->translateAttribute('description') !!}
                                </div>

                                <div class="categories">
                                <span>
                                    {{ecommerce_trans('Categories')}}:
                                </span>
                                    @if($item->category)
                                        @foreach($item->category as $category)
                                            {{$category->title. ($loop->iteration > 1 ? ',' : '' )}}
                                        @endforeach
                                    @endif
                                </div>
                                <div class="categories">
                                 <span>
                                    {{ecommerce_trans('Stock')}}:
                                </span>
                                    {{get_meta_value_by_key($item ,'stock' ,'موجود')}}
                                </div>
                                <ul class="social-box mt-3">
                                    <x-theme::share-post
                                        :links="$this->share"
                                        ulStyle="display:flex;align-items: center; gap: 5px;"
                                        :title="true"
                                    />
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lower-box" dir="rtl">
                    <div class="product-info-tabs">
                        <div class="prod-tabs tabs-box">
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#prod-review" class="tab-btn active-btn">
                                    {{ecommerce_trans('Comments')}}
                                    @if($comments_count)
                                        <b>({{$comments_count}})</b>
                                    @endif
                                </li>
                            </ul>

                            <div class="tabs-content">
                                <div class="tab active-tab" id="prod-review">
                                    <div class="rbt-shadow-box review-wrapper mt--30" id="review">
                                        <div>
                                            <livewire:theme::components.comment-list
                                                :title="false"
                                                type="Product"
                                                :id="$item->id"
                                            />
                                            <livewire:theme::forms.comment-form
                                                :model="Product::class"
                                                :id="$item->id"
                                                :title="true"
                                            />
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
</x-theme::root>
