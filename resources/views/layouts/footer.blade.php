<footer id="footer" class="clearfix" style="background-color:#0c0000">
    <div id="footer-widgets" class="container">
        <div class="themesflat-row gutter-30">
            <div class="col span_1_of_3" dir="rtl">
                <div class="widget widget_text" style="background: url('/images/page/bg-contact.png') no-repeat bottom right; ">
                    <div class="textwidget">
                        <p style="display: flex;background: #1d1d1d;justify-content: center;padding-top: 2px;align-items: center;min-height: 40px;border-left: 2px solid #ffc30c;">
                            <img src="/images/logo-white@2x.png" alt="Image" width="190" height="36">
                        </p>
                        <p class="margin-bottom-15">ما بیش از 15 سال تجربه داریم که می توانیم در 24 ساعت شبانه روز به شما کمک کنیم.</p>
                        <ul>
                            <li>
                                <div class="inner">
                                    <span class="fa fa-map-marker"></span>
                                    <span class="text">
                                        تهران خیابان فلسطین جنوبی, مابین لبافی نژاد و جمهوری پلاک 106 طبقه سوم-واحد 9
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <span class="fa fa-phone"></span>
                                    <div class="text" style="display: flex;flex-direction: column;align-items: flex-end">
                                        <p style="display: flex;justify-content: space-between;width: 100%;"> <span>شماره تماس :</span> <span>09120190256</span> </p>
                                        <p> 021-66467148 </p>
                                        <p> 021-66467362</p>
                                    </div>
                                </div>
                            </li>
                            <li class="margin-top-7">
                                <div class="inner">
                                    <span class=" font-size-14 fa fa-envelope"></span>
                                    <span class="text">info@taraznir.com</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
            </div>
            <div class="col span_1_of_3" dir="rtl">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0"></div>
                <div class="widget widget_lastest">
                    <h2 class="widget-title"><span>استاندارد‌های اخیر</span></h2>
                    <ul class="lastest-posts data-effect clearfix">
                        @if( !empty( $recentPosts ) && $recentPosts->isNotEmpty() )
                            @foreach( $recentPosts as $post )
                                <li class="clearfix">
                                    <div class="thumb data-effect-item has-effect-icon">
                                        <img src="{{$post->images('thumbnail')}}" alt="Image">
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link" style="width: 100%;">
                                            <a href="/standard/{{$post->slug}}" class="icon-2" style="margin-left: 0"></a>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h3><a href="/standard/{{$post->slug}}">{{$post->title}}</a></h3>
                                        <span class="post-date"><span class="entry-date pr-3">{{ verta( $post->created_at )->format(' %d %B ، %Y ') }}</span></span>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col span_1_of_3" dir="rtl">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                <div class="widget widget_tags">
                    <h2 class="widget-title margin-bottom-30"><span>دسته بندی مقالات</span></h2>
                    <div class="tags-list text-right">
                        @if( !empty( $categories ) && $categories->isNotEmpty() )
                            @foreach( $categories as $category )
                                <a href="/blog/category/{{$category->slug}}">{{$category->title}}</a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col span_1_of_3"  dir="rtl">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                <div class="widget widget_instagram">
                    <h2 class="widget-title margin-bottom-30"><span>گالری تصاویر </span></h2>
                    <div class="instagram-wrap data-effect clearfix col3 g10" dir="rtl">
                        @if( !empty( $galleries ) && $galleries->isNotEmpty() )
                            @foreach( $galleries as $gallery )
                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="/storage/{{$gallery->image}}" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="{{$gallery->attachment()}}" alt="{{$gallery->title}}" ></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link" style="width: 100%">
                                            <span class="icon-3" style="margin-left: 0"></span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
