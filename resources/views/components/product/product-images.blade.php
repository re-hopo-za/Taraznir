<div class="detail-gallery col-lg-6">
    <div class="themesflat-carousel-box data-effect clearfix has-bullets bullet-circle bullet24 has-thumb " data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
        <div class="owl-carousel owl-theme">
            @if( !empty( $product->images('cover') ) )
                @foreach( $product->images('cover') as $image )
                    <div class="gallery-item" >
                        <div class="inner">
                            <div class="thumb">
                                <img style="height: 500px;object-fit: cover;" src="{{ asset( $image->getUrl( 'cover') ) }}" alt="{{ $product->title }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
