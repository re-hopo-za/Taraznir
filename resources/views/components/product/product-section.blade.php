<div class="row-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-headings style-1 text-center clearfix">
                    <h2 class="heading">محصولات </h2>
                    <div class="sep has-icon width-125 clearfix">
                        <div class="sep-icon">
                            <span class="sep-icon-before sep-center sep-solid"></span>
                            <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                            <span class="sep-icon-after sep-center sep-solid"></span>
                        </div>
                    </div>
                    <p class="sub-heading">خدمات ساختمانی طیف کاملی از خدمات ساخت و ساز را از طراحی اولیه تا اتمام پروژه ارائه می دهد.</p>
                </div>
                <div class="themesflat-carousel-box has-arrows arrow-center offset-v-111 offset-h-21 arrow-circle arrow-style-2 data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                    <div class="owl-carousel owl-theme">
                        @if( !empty( $products ) && $products->count() > 0 )
                            @foreach( $products as $product )
                                @php( $meta = $product->meta()->pluck('value' ,'key')->toArray() )
                                <div class="product-card">
                                    <div class="badge">موجود</div>
                                    <div class="product-tumb">
                                        <img src="{{$product->images('thumbnail')}}" alt="{{$product->title}}">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">
                                        @if( !empty( $product->categories ) && $product->categories->count() > 0 )
                                            @foreach( $product->categories as $cat )
                                                 <a href="/product/category/{{$cat->slug}}">{{$cat->title}}</a>
                                                 {{$loop->index > 0 ? ',' : ''}}
                                            @endforeach
                                        @endif
                                        </span>
                                        <h4><a href="/product/{{ $product->slug }}" class="text-right">{{ $product->title }}</a></h4>
                                        <p class="text-right">{{Str::limit($product->summary ,100)}}</p>
                                        <div class="product-bottom-details">
                                            <div class="product-links text-left" >
                                                <a href="tel:09120190256"><i class="fa fa-phone"></i></a>
                                            </div>
                                            <div class="product-price links text-right"> {{ indexChecker( $meta ,'price' ) }} </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="60" data-smobile="60"></div>
            </div>
        </div>
    </div>
</div>
