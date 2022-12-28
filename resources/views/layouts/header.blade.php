<div id="site-header-wrap">
    <div id="top-bar" class="top-header-main-con">

        @if( Auth::check() )
            @php
                $name    = Auth::user()->name;
                $email   = Auth::user()->email;
                $profile = !empty( Auth::user()->profile_photo_url ) ? Auth::user()->profile_photo_url : 'https://ui-avatars.com/api/?name='.$name.'&color=FFFFFF&background=fbb72c';
            @endphp

            <div class="profile-con" x-data="{ openDrop: false }">
                <div class="profile-details" @click="openDrop = !openDrop" >
                    <div class="profile-img">
                        <img src="{{ $profile }}" alt="">
                    </div>
                    <div class="profile-name">
                        <p>{{ $name }}</p>
                        <i class="fa fa-angle-down"></i>
                    </div>

                </div>
                <div class="profile-drop" x-show="openDrop" >
                    <a href="{{route('profile.show') }}">پروفایل</a>
                    <a href="{{route('logout')}}">خروج</a>
                </div>
            </div>

        @else
            <div class="registration" style="min-width: 100px;padding: 0 4px;font-size: 13px;">
                <a href="/register">ورود / ثبت ‌نام</a>
            </div>

        @endif
        <div class="top-bar-content">
            <div class="header-address-con" >
                <span class="address content">تهران خیابان فلسطین جنوبی</span>
                <span class="phone content">021-66467148</span>
                <span class="time content">شنبه تا پنجشنبه 8 الی 17</span>
            </div>
        </div>
        <div class="top-bar-socials">
            <div class="inner">
                <span class="text"> ما را دنبال کنید : </span>
                <span class="icons">
                    <a href="https://instagram.com/taraz_nir?igshid=nl8mdxirbjt3" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://telegram.me/" target="_blank"><i class="fa fa-telegram"></i></a>
                    <a href="https://wa.me/09356383656"><i class="fa fa-whatsapp"></i></a>
                </span>
            </div>
        </div>

    </div>
    <header id="site-header">
        <div id="site-header-inner" class="container">
            <div class="wrap-inner clearfix">
                <div id="site-logo" class="clearfix">
                    <div id="site-log-inner">
                        <a href="/" rel="home" class="main-logo">
                            <img src="/images/taraznir-logo-0.5x.png" alt="Taraznir logo" width="186" height="39" data-retina="/images/taraznir-logo-0.5x.png" data-width="186" data-height="39">
                        </a>
                    </div>
                </div>
                <div class="mobile-button">
                    <span></span>
                </div>
                <nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                        @if( !empty( $menu->items ) )
                            @foreach($menu->items as $item)
                                @php
                                    $menu_name = ltrim( $item['data']['url'] ,'/').'-menu';
                                @endphp
                                <li class="menu-item {{returnValueIsTrue( $item ,'children' ,'menu-item-has-children')}} {{checkCurrentPage( $item['data']['url'] )}} {{$menu_name}}">
                                    @if( !empty( indexChecker( $item ,'data' )) )
                                    <a href="{{  $item['data']['url'] }}" target="{{ $item['data']['target'] }}">{{ $item['label'] }}</a>

                                        @if( !empty( $item['children'] ) )
                                            <ul class="sub-menu">
                                                @foreach( $item['children'] as $child_1 )
                                                    <li class="menu-item">
                                                        @if( !empty( indexChecker( $child_1 ,'data' )) )
                                                            <a href="{{ $child_1['data']['url'] }}" target="{{ $child_1['data']['target'] }}">{{ $child_1['label'] }}</a>

                                                            @if( !empty( $child_1['children'] ) )
                                                                <ul class="sub-menu">
                                                                    @foreach(  $child_1['children'] as $child_2 )
                                                                        <li class="menu-item">
                                                                            @if( !empty( indexChecker( $child_2 ,'data' )) )
                                                                                <a href="{{ $child_2['data']['url'] }}" target="{{ $child_2['data']['target'] }}">{{ $child_2['label'] }}</a>
                                                                            @endif
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        @endif

                                                    </li>
                                                @endforeach

                                            </ul>
                                        @endif

                                    @endif
                                </li>
                            @endforeach
                        @endif

                    </ul>
                </nav>
                <div id="header-search">
                    <a href="#" class="header-search-icon">
                    <span class="search-icon fa fa-search">
                    </span>
                    </a>
                    <form role="search" method="get" class="header-search-form" action="/result">
                        <label class="screen-reader-text">جستجو :</label>
                        <input type="text" value="" name="s" class="header-search-field text-right" placeholder="....جستجو">
                        <button type="submit" class="header-search-submit" title="Search">جستجو</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
</div>
