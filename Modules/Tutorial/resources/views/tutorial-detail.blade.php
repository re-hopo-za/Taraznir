@section('seo')
    {!! seo_tags_generator( $item ,null ,"$item->slug تارازنیر | آموزش تصویری | " ,true) !!}
@endsection

<x-theme::root :sidebar="false">
    <div style="margin-bottom: 100px;">
        <div class="rbt-page-banner-wrapper tutorial-detail">
            <div class="rbt-banner-image"></div>
            <div class="rbt-banner-content">
                <div class="rbt-banner-content-top rbt-breadcrumb-style-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="content text-center">
                                    @if($rate = (int)get_meta_value_by_key($item ,'rate'))
                                        <div class="d-flex align-items-center flex-wrap justify-content-center mb--15 rbt-course-details-feature">
                                            <div class="feature-sin rating">
                                                <b>{{$rate}}</b>
                                                {!! str_repeat('<i class="fa fa-star"></i>' ,$rate) !!}
                                            </div>
                                        </div>
                                    @endif

                                    <h2 class="title theme-gradient">
                                        {{$item->title}}
                                    </h2>
                                    <div class="rbt-author-meta mb--20 justify-content-center" dir="rtl">
                                        <div class="rbt-avater">
                                        <span>
                                            <img src="{{$item->author?->getAvatarAttribute()}}" alt="{{$item->author?->name}}">
                                        </span>
                                        </div>
                                        <div class="rbt-author-info">
                                            <span> {{$item->author?->name}} </span>
                                        </div>
                                    </div>
                                    <ul class="rbt-meta">
                                        <li> <span dir="rtl">{!! jalali_to_gregorian_and_conversely($item->created_at ,format:'m F')!!}</span> <i class="fa fa-calendar"></i></li>
                                        <li> {{get_meta_value_by_key($item ,'lang') ?: 'فارسی'}} <i class="fa fa-globe"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rbt-section-overlayping-top rbt-section-gapBottom">
            <div class="inner">
                <div class="container">
                    <div class="col-lg-12">
                        <div class=" video-popup-wrapper text-center popup-video mb--15">
                            <div class="video-content">
                                @php
                                    $video_url = null;
                                    if($first_course = $item->courses?->first())
                                        if( $first_course->media->first())
                                            $video_url = $first_course->media->first()->getFullUrl();
                                        else
                                            $video_url = $first_course->link;
                                @endphp
                                <video
                                    controls
                                    class="video-element"
                                    id="tutorial-video"

                                    preload="auto"
                                    style="width: 100%;object-fit: cover;"
                                >
                                    <source src="{{$video_url}}">
                                    <div class="position-to-top">
                                    <span class="rbt-btn rounded-player-2 with-animation">
                                        <span class="play-icon"></span>
                                    </span>
                                    </div>
                                </video>

                            </div>
                        </div>


                        <div class="row row--30 gy-5 pt--60">
                            <div class="col-lg-8">
                                <div class="course-details-content">
                                    <div class="rbt-inner-onepage-navigation sticky-top" style="top:130px">
                                        <nav class="mainmenu-nav onepagenav">
                                            <ul class="mainmenu" >
                                                <li class="current">
                                                    <a href="#overview">خلاصه آموزش</a>
                                                </li>
                                                <li>
                                                    <a href="#coursecontent">لیست دروس</a>
                                                </li>
                                                <li>
                                                    <a href="#intructor">مدرس</a>
                                                </li>
                                                <li>
                                                    <a href="#review">نظر‌سنجی</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <div class="rbt-course-feature-box overview-wrapper rbt-shadow-box mt--30 " id="overview">
                                        <div class="rbt-course-feature-inner " dir="rtl">
                                            <div class="section-title">
                                                <h4 class="rbt-title-style-3">خلاصه آموزش</h4>
                                            </div>
                                            <p>
                                                {{$item->summary}}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="course-content rbt-shadow-box coursecontent-wrapper mt--30" id="coursecontent">
                                        <div class="rbt-course-feature-inner" dir="rtl">
                                            <div class="section-title">
                                                <h4 class="rbt-title-style-3">لیست دروس</h4>
                                            </div>
                                            <div class="rbt-accordion-style rbt-accordion-02 accordion">
                                                <div class="accordion" id="accordionExampleb2">
                                                    <div class="accordion-item card">
                                                        <ul class="rbt-course-main-content liststyle">
                                                            @foreach($item->tutorialCourses as $course)
                                                                <li class="mt-3">
                                                                    @php
                                                                        if($course->media->first())
                                                                            $course_url = $course->media->first()->getFullUrl();
                                                                        else
                                                                            $course_url = $course->link
                                                                    @endphp
                                                                    <a href="#tutorial-video" onclick="document.querySelector('#tutorial-video').src = '{{$course_url}}'">
                                                                        <div class="course-content-left">
                                                                            <i class="fa fa-play-circle"></i>
                                                                            <span class="text">{{$course->title}}</span>
                                                                        </div>
                                                                        <div class="course-content-right">
                                                                            <span class="min-lable">{{$course->time}}</span>
                                                                            <span class="rbt-badge variation-03 bg-primary-opacity">
                                                                            <i class="fa fa-eye"></i> نمایش
                                                                        </span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="rbt-instructor rbt-shadow-box intructor-wrapper mt--30" id="intructor">
                                        <div class="about-author border-0 pb--0 pt--0" dir="rtl">
                                            <div class="section-title mb--30">
                                                <h4 class="rbt-title-style-3">مدرس</h4>
                                            </div>
                                            <div class="media align-items-center">
                                                <div class="thumbnail ms-5">
                                                <span>
                                                    <img style="width: 15rem" src="{{$item->author?->getAvatarAttribute()}}" alt="{{$item->author?->name}}">
                                                </span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="author-info">
                                                        <h5 class="title">
                                                        <span class="hover-flip-item-wrapper">
                                                            {{$item->author?->name}}
                                                        </span>
                                                        </h5>
                                                        <span class="b3 subtitle" style="font-family: AzarMehr">{{get_meta_value_by_key($item->author ,'position')}}</span>
                                                        <ul class="rbt-meta mb--20 mt--10">
                                                            <li><span class="rbt-badge-5 ml--5">{{get_meta_value_by_key($item->author ,'rating')}}  امتیاز </span></li>
                                                            <li><i class="fa fa-users"></i>{{get_meta_value_by_key($item->author ,'student')}} دانشجو </li>
                                                        </ul>
                                                    </div>
                                                    <div class="content">
                                                        <p class="description" style="font-family: AzarMehr">
                                                            {{get_meta_value_by_key($item->author ,'bio')}}
                                                        </p>

                                                        <ul class="social-icon social-default icon-naked justify-content-start">
                                                            @if(get_meta_value_by_key($item->author ,'telegram'))
                                                                <li><a href="{{get_meta_value_by_key($item->author ,'telegram')}}">
                                                                        <i class="fa fa-linkedin"></i>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            @if(get_meta_value_by_key($item->author ,'instagram'))
                                                                <li><a href="{{get_meta_value_by_key($item->author ,'instagram')}}">
                                                                        <i class="fa fa-instagram"></i>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            @if(get_meta_value_by_key($item->author ,'whatsapp'))
                                                                <li><a href="{{get_meta_value_by_key($item->author ,'whatsapp')}}">
                                                                        <i class="fa fa-whatsapp"></i>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            @if(get_meta_value_by_key($item->author ,'linkedin'))
                                                                <li><a href="{{get_meta_value_by_key($item->author ,'linkedin')}}">
                                                                        <i class="fa fa-linkedin"></i>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="rbt-shadow-box review-wrapper mt--30" id="review">
                                        <div>
                                            <x-comments::index :model="$item" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="course-sidebar sticky-top rbt-shadow-box rbt-gradient-border" style="top:130px">
                                    <div class="inner">
                                        <div class="content-item-content">
                                            <div class="rbt-widget-details has-show-more">
                                                <div class="section-title mb--30">
                                                    <h4 class="rbt-title-style-3 text-center">جزئیات آموزش</h4>
                                                </div>
                                                <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                                                    <li>
                                                    <span>
                                                        مدرس
                                                    </span>
                                                        <span class="rbt-feature-value rbt-badge-5">
                                                        {{$item->author?->name}}
                                                    </span>
                                                    </li>
                                                    <li>
                                                    <span>
                                                        سطح
                                                    </span>
                                                        <span class="rbt-feature-value rbt-badge-5">
                                                        {{get_meta_value_by_key($item ,'level') ?? ''}}
                                                    </span>
                                                    </li>
                                                    <li>
                                                    <span>
                                                        زبان
                                                    </span>
                                                        <span class="rbt-feature-value rbt-badge-5">
                                                       {{get_meta_value_by_key($item ,'lang') ?? 'فارسی'}}
                                                    </span>
                                                    </li>
                                                    <li>
                                                    <span>
                                                        تعداد درس
                                                    </span>
                                                        <span class="rbt-feature-value rbt-badge-5">
                                                      {{$item->tutorialCourses?->count()}} درس
                                                    </span>
                                                    </li>
                                                    <li>
                                                    <span>
                                                        تعداد شرکت‌ کننده
                                                    </span>
                                                        <span class="rbt-feature-value rbt-badge-5">
                                                     {{get_meta_value_by_key($item ,'students') ?? '-'}}
                                                    </span>
                                                    </li>
                                                    <li>
                                                    <span>
                                                        قیمت
                                                    </span>
                                                        <span class="rbt-feature-value rbt-badge-5">
                                                        رایگان
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="social-share-wrapper mt--30 text-center">
                                                <div class="rbt-post-share d-flex align-items-center justify-content-center">
                                                    <x-theme::share-post :links="$this->share" ulStyle="display:flex;" :title="false"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

