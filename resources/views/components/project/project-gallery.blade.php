<div class="themesflat-gallery style-2 has-arrows arrow-center arrow-circle offset-v-82 has-thumb w185 clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
    <div class="owl-carousel owl-theme">
        @if( !empty( $project->images() ) )
            @foreach( $project->images('images') as $image )
                <div class="gallery-item" >
                    <div class="inner">
                        <div class="thumb">
                            <img style="height: 500px;object-fit: cover;" src="{{ asset( $image->getUrl( 'images') ) }}" alt="{{ $project->title }}">
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>



