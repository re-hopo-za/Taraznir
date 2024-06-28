@section('seo')
    {!! seo_tags_generator( $seo ,null ," تارازنیر | " .$item->title ,$item) !!}
@endsection


<x-theme::root :sidebar="false">
    <div class="product-detail-page" style="margin-bottom: 8rem">
        <section class="page-title-two">
            <div class="auto-container">
                <div class="content">
                    <h2>{{$item->title}}</h2>
                    <div class="button-box">
                        <a href="/contact" class="theme-btn btn-style-eleven clearfix">
                            <span class="btn-wrap">
                                <span class="text-one">تماس با ما</span>
                                <span class="text-two">تماس با ما</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-detail-section">
            <div class="auto-container">
                <div class="image">
                    <img src="{{$item->images['single']??''}}" alt="{{$item->title}}">
                </div>
                <div class="content" style="padding:30px 10px">
                    {!! $item->content !!}
                </div>
            </div>
        </section>
    </div>
</x-theme::root>

