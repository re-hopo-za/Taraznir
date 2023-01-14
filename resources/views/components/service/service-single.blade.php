<div id="content-wrap" class="container">
    <div id="site-content" class="site-content clearfix">
        <div id="inner-content" class="inner-content-wrap">

            <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60" style="height:80px"></div>
            <div class="themesflat-row equalize sm-equalize-auto clearfix" id="description">
                <div class="span_1_of_6 bg-f7f pr-4" style="height: 330px;">
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60" style="height:60px"></div>
                    <div class="themesflat-content-box clearfix" data-margin="0 10px 0 43px"  data-mobilemargin="0 15px 0 15px" style="margin:0 10px 0 43px">
                        <div class="themesflat-headings style-2 clearfix" dir="rtl">
                            <h2 class="heading font-size-28 line-height-39">{{$service->title}}  </h2>
                            <div class="sep has-width w80 accent-bg margin-top-20 clearfix"></div>
                            <p class="sub-heading margin-top-14 line-height-24">
                                {{$service->summary}}
                           </p>
                       </div>
                   </div>
               </div>
               <div class="span_1_of_6 half-background style-2" style="height: 330px;background-image: url('{{$service->images('cover') }}')"></div>
            </div>
            @if(!empty(indexChecker($meta_desc ,'question_why_install')))
                <div class="flat-content-wrap style-2 clearfix" id="why-install">
                    <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60" style="height:80px"></div>
                    <div class="themesflat-content-box clearfix" data-margin="0 10px 0 43px"  data-mobilemargin="0 15px 0 15px" style="margin:0 10px 0 43px">
                        <div class="themesflat-headings style-2 clearfix" dir="rtl">
                            <div class="d-flex justify-content-between align-center">
                                <div>
                                    <h2 class="heading font-size-28 line-height-39">{{indexChecker($meta_desc ,'question_why_install')}}</h2>
                                    <div class="sep has-width w80 accent-bg margin-top-14 clearfix"></div>
                                </div>
                                <img src="/icons/project.svg" alt="" width="50px" height="50px">
                            </div>
                            <p class="sub-heading margin-top-14 line-height-24">
                                {{indexChecker($meta_desc ,'result_why_install')}}
                             </p>
                        </div>
                    </div>
                </div>
            @endif
            @if(!empty(indexChecker($meta_desc ,'question_why_service')))
                <div class="flat-content-wrap style-2 clearfix" id="why-service">
                    <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60" style="height:80px"></div>
                    <div class="themesflat-content-box clearfix" data-margin="0 10px 0 43px"  data-mobilemargin="0 15px 0 15px" style="margin:0 10px 0 43px">
                        <div class="themesflat-headings style-2 clearfix" dir="rtl">
                            <div class="d-flex justify-content-between align-center">
                                <div>
                                    <h2 class="heading font-size-28 line-height-39"> {{indexChecker($meta_desc ,'question_why_service')}}</h2>
                                    <div class="sep has-width w80 accent-bg margin-top-14 clearfix"></div>
                                </div>
                                <img src="/icons/service.svg" alt="" width="50px" height="50px">
                            </div>
                            <p class="sub-heading margin-top-14 line-height-24">
                                {{indexChecker($meta_desc,'result_why_service')}}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if(!empty($meta_doing))
                <div class="flat-content-wrap style-2 clearfix" id="doing-items">
                    <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60" style="height:80px"></div>
                    <div class="themesflat-content-box clearfix" data-margin="0 10px 0 43px"  data-mobilemargin="0 15px 0 15px" style="margin:0 10px 0 43px">
                        <div class="themesflat-headings style-2 clearfix" dir="rtl">
                            <div class="d-flex justify-content-between align-center">
                                <div>
                                    <h2 class="heading font-size-28 line-height-39">لیست کارها</h2>
                                    <div class="sep has-width w80 accent-bg margin-top-14 clearfix"></div>
                                </div>
                                <img src="/icons/tasks.svg" alt="" width="50px" height="50px">
                            </div>
                            <div>
                                @foreach( $meta_doing as $item )
                                    <div class="themesflat-list has-icon style-1 icon-left size-16 clearfix">
                                        <div class="inner">
                                            <span class="item">
                                                <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                <span class="text pr-4">{{$item}}</span>
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                           </div>
                        </div>
                    </div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="56" data-mobile="56" data-smobile="56" style="height:56px"></div>
            @endif
        </div>
    </div>
    <div id="sidebar" style="min-width: 270px">
        <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="0" data-smobile="0"
             style="height:80px"></div>
        <div id="inner-sidebar" class="inner-content-wrap">
            <div class="widget widget_list">
                <div class="inner">
                    <ul class="list-wrap" dir="rtl">
                        <li class="list-item">
                            <a href="#description"><span class="text">توضیحات </span></a>
                        </li>
                        <li class="list-item">
                            <a href="#why-install"><span class="text">{{indexChecker($meta_desc ,'question_why_install')}} </span></a>
                        </li>
                        <li class="list-item">
                            <a href="#why-service"><span class="text">{{indexChecker($meta_desc ,'question_why_service')}}</span></a>
                        </li>
                        <li class="list-item">
                            <a href="#doing-items"><span class="text">لیست کارای انجامی</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <livewire:components.contact.contact-get-in-touch />
            <livewire:components.attachment :post="$service" />
        </div>
        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60" style="height:0"></div>
    </div>
</div>
