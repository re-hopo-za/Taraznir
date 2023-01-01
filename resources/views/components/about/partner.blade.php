<div class="row-partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="83" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-carousel-box clearfix" data-gap="5" data-column="5" data-column2="3" data-column3="2" data-auto="true">
                    <div class="owl-carousel owl-theme">
                        @if( !empty( $brands ) && $brands->count() > 0 )
                            @foreach( $brands as $brand )
                                @php $meta = $brand->meta()->pluck('value' ,'key')->toArray(); @endphp
                                <div class="themesflat-partner style-1 align-center clearfix">
                                    <div class="partner-item">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img style="width: 100%; height: 156px;" src="{{$brand->attachment('attachments')}}" alt="{{indexChecker($meta,'title')}}" class="partner-default">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="66" data-mobile="60" data-smobile="60"></div>
            </div>
        </div>
    </div>
</div>
