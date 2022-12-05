@section('breadcrumbs')
    @include('layouts.breadcrumbs' ,['routes' => ['Resource' => '' ] ,'pageName' => 'Resource' ])
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/resource.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('/js/resource.js') }}" defer></script>
@endsection


@section('sidebar','sidebar-right')


<div id="main-content" class="site-main clearfix pt-5">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div class="detail-gallery">
                <div class="themesflat-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div>
                <div class="flat-content-wrap style-3 clearfix" dir="rtl">
                    <img src="{{ $standard->images('') }}" alt="{{$standard->slug}}">
                </div>

                <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40" data-smobile="40"></div>
                <div class="flat-content-wrap style-3 clearfix" dir="rtl">
                    <h5 class="title">توضیحات </h5>
                    <div class="sep has-width w60 accent-bg margin-top-18 clearfix"></div>
                    <div class="content text-right mt-5">
                        {{$standard->summary}}
                    </div>
                </div>

                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                <livewire:components.related-posts :posts="$related" :title="'استاندارد‌های مرتبط'"/>
            </div>
        </div>
        <div id="sidebar">
            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
            <div id="inner-sidebar" class="inner-content-wrap">
                <div class="detail-inner-wrap">
                    <div class="content-info" dir="rtl">
                        <div class="themesflat-headings style-2 clearfix">
                            <h2 class="heading line-height-62">جزئیات استاندارد</h2>
                            <div class="sep has-width w80 accent-bg clearfix">
                            </div>
                        </div>
                        <ul class="list-info has-icon icon-left">
                            <li dir="rtl"><span class="text">کشور: <span class="icon"><i class="fa fa-user"></i></span></span><span class="right">{{indexChecker( $meta ,'client' )}}</span></li>
                            <li><span class="text">سال : <span class="icon"><i class="fa fa-usd"></i></span></span><span class="right">{{indexChecker( $meta ,'year')}}</span></li>
                            <li><span class="text">گروه: <span class="icon"><i class="fa fa-search"></i></span></span><span class="right">{{indexChecker( $meta ,'location')}} </span></li>
                                <span class="right">
                                    @if( !empty( $categories ) )
                                        @foreach( $categories as $category )
                                            {{ $loop->index > 0 ? '/' : '' }}
                                            <a href="/project/tag/{{$category->slug}}">{{$category->title}}</a>
                                        @endforeach
                                    @endif
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <livewire:components.attachment :post="$standard" />
            </div>
        </div>
    </div>
</div>
