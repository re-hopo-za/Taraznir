<div class="col-lg-6">
    <div class="summary entry-summary">
        <h1 class="mb-3 font-weight-bold text-7 text-right">{{$product->title}}</h1>
        <div class="pb-5 mt-3 clearfix">
            <div title="Rated 3 out of 5" class="float-left">
                <div class="list-star">
                    @for( $i = 0; $i < 5; $i++)
                        @if( $i < indexChecker( $meta ,'rating' ,0 ) )
                            <i class="ion-star"></i>
                        @else
                            <i class="ion-ios-star-outline"></i>
                        @endif
                    @endfor
                </div>
            </div>
            <div class="review-num text-right">
                <span class="count" itemprop="ratingCount" dir="rtl">
                    {!! count($comments) > 0 ?  count( $comments ). '<span>  نظر ثبت شده </span> ' : 'بدون نظر ' !!}
                </span>
            </div>
        </div>
        <p class="mb-5 text-right" dir="rtl">
            {{ $product->summary }}
        </p>
        <div class="product-meta text-right">
            <span class="posted-in" dir="rtl"> <span> دسته بندی ها: </span>
                @if( !empty( $product->categories ) )
                    @foreach( $product->categories as $category )
                        <a href="{{ route('CategoryProduct', $category->slug) }}">{{ $category->title }}</a>
                        {{$loop->count > 1 ? '. ' : ''}}
                    @endforeach
                @else
                    <a href="#">بدون دسته بندی</a>
                @endif
            </span>
        </div>
        <div class="price text-right">
            <span class="posted-in"> قیمت :   <a rel="tag" href="#"> تماس بگیرید </a></span>
        </div>
    </div>
</div>
