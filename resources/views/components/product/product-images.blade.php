<div class="detail-gallery col-lg-6">
    <div class="themesflat-carousel-box data-effect clearfix has-bullets bullet-circle bullet24 has-thumb " data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
        <div class="owl-carousel owl-theme">
            @if( !empty( $product->images() ) )
                @foreach( $product->images('images') as $image )
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset( $image->getUrl( 'images') ) }}" alt="{{ $product->title }}">
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
