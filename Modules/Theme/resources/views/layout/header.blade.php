<header class="main-header header-style-two">

    <div class="header-lower">
        <div class="header-wrapper">
            <div class="inner-container d-flex justify-content-between align-items-center" style="gap:10px">

                <div class="logo-box d-flex align-items-center">
                    <div class="nav-toggle-btn a-nav-toggle navSidebar-button">
                        <span class="hamburger">
                          <span class="top-bun"></span>
                          <span class="meat"></span>
                          <span class="bottom-bun"></span>
                        </span>
                    </div>
                    <div class="logo">
                        <a href="/">
                            <img
                                src="{{config('core.logo.0,5x')}}"
                                alt="taraznir logo"
                                width="160"
                                height="60"
                            />
                        </a>
                    </div>
                </div>

                <div class="middle-box">
                    <div class="upper-box">
                        <div class="info-list">
                            <div class="d-flex justify-content-between align-items-center flex-wrap flex-row-reverse" >
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <span class="flaticon-checked"></span>
                                        </span>
                                        <a href="/service/certification" style="color:#000;font-weight:bold">
                                            تاییدیه ارت اداره کار
                                        </a>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <span class="flaticon-phone-call"></span>
                                        </span>
                                        {{get_meta_value_by_key($options ,'header_phone_number')}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">
                        <livewire:theme::components.search />


                        <nav class="main-menu show navbar-expand-md">
                            <div class="navbar-header">
                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation"
                                >
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">

                                <ul class="navigation clearfix">
                                    @if(!empty($menu->items))
                                        @foreach($menu->items as $item)
                                            @php
                                                $menu_name = ltrim($item['data']['url'] ,'/').'-menu';
                                            @endphp
                                            <li
                                                class="{{!empty($item['children']) ? 'dropdown' :''}}
                                                {{return_value_is_true($item ,'children' ,'menu-item-has-children')}}
                                                {{check_current_page($item['data']['url'])}}"
                                            >
                                                @if(!empty(index_checker($item ,'data' )))
                                                    <a
                                                        href="{{$item['data']['url'] }}"
                                                        target="{{$item['data']['target']}}"
                                                    >
                                                        {{$item['label']}}
                                                    </a>

                                                    @if(!empty($item['children']))
                                                        <ul>
                                                            @foreach($item['children'] as $child_1)
                                                                <li>
                                                                    @if(!empty(index_checker($child_1 ,'data' )))
                                                                        <a
                                                                            href="{{ $child_1['data']['url'] }}"
                                                                            target="{{ $child_1['data']['target'] }}"
                                                                        >
                                                                            {{ $child_1['label'] }}
                                                                        </a>

                                                                        @if(!empty($child_1['children']))
                                                                            <ul>
                                                                                @foreach(  $child_1['children'] as $child_2)
                                                                                    <li>
                                                                                        @if(!empty(index_checker($child_2 ,'data' )))
                                                                                            <a
                                                                                                href="{{ $child_2['data']['url'] }}"
                                                                                                target="{{ $child_2['data']['target'] }}"
                                                                                            >
                                                                                                {{ $child_2['label'] }}
                                                                                            </a>
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
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="auth-button-box text-center right-header">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a href="{{route('profile')}}" class="theme-btn btn-style-one" dir="rtl">
                            <span class="icon flaticon-left-arrow"></span>
                            حساب کاربری
                        </a>
                    @else
                        <a href="{{route('sign-up')}}" class="theme-btn btn-style-one" dir="rtl">
                            <span class="icon flaticon-left-arrow"></span>
                            ورود \ ثبت‌ نام
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <div class="sticky-header">
        <div class="auto-container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{route('/')}}" title="{{config('app.name')}}">
                        <img src="{{config('core.logo.0,25x')}}" alt="{{config('app.name')}}" title="{{config('app.name')}}">
                    </a>
                </div>

                <div class="right-box">
                    <nav class="main-menu">
                    </nav>
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                </div>

            </div>
        </div>
    </div>


    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="/">
                <img src="/images/mobile-logo.png" alt="" title=""></a>
            </div>

            <livewire:theme::components.search :mobile="true" />
            <div class="menu-outer"></div>
        </nav>
    </div>
</header>

