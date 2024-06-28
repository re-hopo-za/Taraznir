@section('seo')
    {!! seo_tags_generator( $seo ,'gallery' ,' تارازنیر | گالری تصاویر') !!}
@endsection


<x-theme::root :sidebar="false" :breads="[
    'title'  => gallery_trans('Gallery'),
    'breads' => [
        ['title' => gallery_trans('Gallery')],
    ],
]">

    <div class="page-wrapper gallery-page" style="margin-bottom: 100px;">
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row margin-lg-40b" dir="rtl">

                    @foreach($this->items as $item)
                        <div class="col-sm-12 gallery-item">
                            <div class="titles left">
                                <div class="d-flex gap-2 align-items-center">
                                    <h3 class="title">
                                        {{$item->title}}
                                    </h3>
                                    <span>{{$item->date}}</span>
                                </div>
                                <div class="summary">
                                    {{$item->summary}}
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-12 ">
                                    <div class="pswp-gallery pswp-gallery--single-column gallery-container" id="gallery-container">
                                        @foreach($item->getMedia('*') as $image)
                                            <a href="javascript:void(0)"
                                               data-pswp-src="{{$image->getUrl('origin')}}"
                                               data-pswp-width="2500"
                                               data-pswp-height="1666"
                                               target="_blank">
                                                <img
                                                    src="{{$image->getUrl('cover')}}"
                                                    alt="{{$image->name}}"
                                                />
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</x-theme::root>

