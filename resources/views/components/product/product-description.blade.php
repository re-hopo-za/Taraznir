<div class="flat-content-wrap style-3 clearfix" dir="rtl">
    <h5 class="title  text-right"> توضیحات محصول</h5>
    <div class="sep has-width w60 accent-bg margin-top-18 clearfix"></div>
    @if( !empty( $product->content ) )
        <div class="content-text text-right">
            {!! $product->content !!}
        </div>
    @endif
 </div>
