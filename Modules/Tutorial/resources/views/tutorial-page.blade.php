@section('seo')
    {!! seo_tags_generator( $seo ,'tutorial' ,' تارازنیر | آموزش تصویری') !!}
@endsection


<x-theme::root :sidebar="false">
    <div style="margin-bottom: 100px;">
        <div class="rbt-page-banner-wrapper mixitup-gallery" dir="rtl">
            <div class="rbt-banner-image"></div>
            <div class="rbt-banner-content ">
                <div class="rbt-banner-content-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="page-list">
                                    <li class="rbt-breadcrumb-item"><a href="/">خانه</a></li>
                                    <li>
                                        <div class="icon-right">
                                            <i class="fa fa-angle-left"></i>
                                        </div>
                                    </li>
                                    <li class="rbt-breadcrumb-item active">آموزش تصویری</li>
                                </ul>

                                <div class=" title-wrapper">
                                    <h1 class="title mb--0">آموزش‌های تصویری</h1>
                                    <a href="#" class="rbt-badge-2">
                                        {{count($items)}} آموزش
                                    </a>
                                </div>
                                <p class="description">
                                    دوره هایی که به طراحان مبتدی کمک می کند تا به تک شاخ های واقعی تبدیل شوند.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rbt-course-top-wrapper mt--40">
                    <div class="container">
                        <div class="row g-5 align-items-center">

                            <div class="col-lg-5 col-md-12">
                                <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                                    <div class="rbt-short-item switch-layout-container">
                                        <ul class="course-switch-layout">
                                            <li class="course-switch-item">
                                                <button class="rbt-grid-view active" title="Grid Layout">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="grid-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-grid-2 fa-lg"><path fill="currentColor" d="M224 80c0-26.5-21.5-48-48-48H80C53.5 32 32 53.5 32 80v96c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V80zm0 256c0-26.5-21.5-48-48-48H80c-26.5 0-48 21.5-48 48v96c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V336zM288 80v96c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H336c-26.5 0-48 21.5-48 48zM480 336c0-26.5-21.5-48-48-48H336c-26.5 0-48 21.5-48 48v96c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V336z" class=""></path></svg>
                                                    <span class="text">شبکه‌‌ای</span>
                                                </button>
                                            </li>
                                            <li class="course-switch-item">
                                                <button class="rbt-list-view" title="List Layout">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="list-ul" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-list-ul fa-lg"><path fill="currentColor" d="M64 144a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM64 464a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48-208a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" class=""></path></svg>
                                                    <span class="text">لیستی</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="rbt-sorting-list d-flex flex-wrap align-items-end justify-content-start justify-content-lg-end">
                                    <div class="rbt-short-item">
                                        <div class="rbt-search-style me-0">
                                            <input wire:model="search" type="text"  placeholder="دوره خود را جستجو کنید..">
                                            <button wire:click="setSearching" type="button" class="rbt-search-btn rbt-round-btn">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>

                                        @if($this->search)
                                            <div style=" position: absolute; min-width: 150px; margin-top: 5px; margin-right: 5px; color: indianred; cursor: pointer;">
                                                <span class="fa fa-close" wire:click="clearSearching">
                                                    <span class="px-3" style="font-family: AzarMehr;">حذف فیلتر جستجو</span>
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="rbt-short-item">
                                        <div class="filter-select">
                                            <span class="select-label d-block">ترتیب ‌بندی بر‌اساس</span>
                                            <div class="filter-select rbt-modern-select search-by-category">
                                                <select wire:change="setOrder" wire:model="order_by">
                                                    <option value="asc">اخیر</option>
                                                    <option value="desc">قدیمی‌تر</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt--60">
                                <div class="filters">
                                    <div class="filter-tabs filter-tab-button justify-content-start" dir="rtl">
                                        <button class="filter active" type="button"  data-filter="all">
                                            <span class="filter-text">همه</span>
                                            <span class="course-number">01</span>
                                        </button>
                                        @foreach($this->categories as $category)
                                            <button class="filter" type="button" data-role="button" data-filter=".{{$category->slug}}">
                                                <span class="filter-text">{{$category->title}}</span>
                                                <span class="course-number">0{{$loop->iteration + 1}}</span>
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rbt-section-overlayping-top rbt-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rbt-course-grid-column filter-list">
                            @foreach($items as $item)
                                @php
                                    $categories = $item->category->pluck('slug')->toArray()
                                @endphp
                                <div class="course-grid-3 mix all {{ $categories ? implode(' ' ,$categories) : ''}}">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="javascript:void(0)">
                                                <img src="{{$item->images['thumbnail'] ?? ''}}" alt="{{$item->title}}"/>
                                                <div class="rbt-badge-3 bg-white">
                                                    <span>رایکان</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="rbt-card-body" dir="rtl">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        {!! str_repeat('<i class="fa fa-star"></i>' ,(int)get_meta_value_by_key($item ,'rate')) !!}
                                                    </div>
                                                    <span class="rating-count">(
                                                {{$item->comments->count() > 0 ? $item->comments->count() : 'بدون'}}
                                                نظر)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  width="18" height="18" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M101.245 123.338a12.146 12.146 0 0 1-7.806-2.846L66.513 97.849l-26.928 22.644a12.145 12.145 0 0 1-7.804 2.845c-1.781 0-3.502-.381-5.119-1.133a12.166 12.166 0 0 1-7.006-10.992V26.02a21.224 21.224 0 0 1 6.255-15.102 21.217 21.217 0 0 1 15.101-6.256h51a21.22 21.22 0 0 1 15.102 6.255 21.217 21.217 0 0 1 6.255 15.102v85.193c0 4.696-2.75 9.011-7.007 10.992a12.016 12.016 0 0 1-5.117 1.134zM66.513 88.622c.915 0 1.831.313 2.575.938l29.501 24.809a4.189 4.189 0 0 0 4.397.583 4.138 4.138 0 0 0 2.384-3.74V26.02c0-3.568-1.389-6.922-3.912-9.445s-5.877-3.913-9.445-3.913h-51c-3.567 0-6.921 1.39-9.444 3.913s-3.913 5.877-3.913 9.445v85.193c0 1.598.935 3.065 2.383 3.739a4.184 4.184 0 0 0 4.396-.582l29.502-24.81a4.002 4.002 0 0 1 2.576-.938z" fill="#192335" opacity="1" data-original="#192335" ></path></g></svg></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title">
                                                <a href="tutorial/{{$item->slug}}">{{$item->title}}</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path d="M448.8 0H111.4C76.552 0 48.2 28.352 48.2 63.2v385.601C48.2 483.649 76.552 512 111.399 512h337.4c8.285 0 15-6.716 15-15V15c.001-8.284-6.713-15-14.999-15zM78.201 63.2c0-18.306 14.895-33.2 33.199-33.2h322.4v355.601H111.4a62.815 62.815 0 0 0-33.199 9.453V63.2zm33.2 418.8c-18.307 0-33.2-14.893-33.2-33.199 0-18.307 14.893-33.2 33.199-33.2h322.4V482H111.401z" fill="#000000" opacity="1" data-original="#000000"></path><path d="M352.401 96.399H159.6c-8.283 0-15 6.716-15 15s6.717 15 15 15h192.801c8.285 0 15-6.716 15-15s-6.716-15-15-15z" fill="#6b7385" opacity="1" data-original="#6b7385"></path></g></svg>
                                                    {{$item->courses?->count()}} درس </li>
                                            </ul>
                                            <p class="rbt-card-text">
                                                {{$item->summary}}
                                            </p>
                                            <div class="rbt-author-meta">
                                                <div class="rbt-avater">
                                            <span>
                                                <img src="{{$item->author?->getAvatarAttribute()}}" alt="{{$item->author?->name}}">
                                            </span>
                                                </div>
                                                <div class="rbt-author-info">
                                                    توسط <span style="color:#0c63e4">{{$item->author?->name}}</span> در <span style="color:#0c63e4">{{$item->category->first()?->title}}</span>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom" dir="ltr">
                                                <a class="rbt-btn-link left-icon" href="tutorial/{{$item->slug}}">
                                                    <i class="feather-shopping-cart"></i> بیشتر
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-theme::root>


@push('styles')
    <link rel="stylesheet" href="{{asset('/css/tutorial.min.css')}}" />
@endpush

@push('scripts')
    <script src="{{asset('/js/tutorial.min.js')}}"></script>
@endpush
