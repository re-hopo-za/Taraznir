<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="javascript:void(0)" class="close-side-widget flaticon-multiply"></a>
            </div>
            <div class="sidebar-textwidget">

                <div class="sidebar-info-contents">
                    <div class="content-inner" dir="rtl">
                        <div class="logo" style="text-align: center;">
                            <a href="/">
                                <img src="{{config('core.logo.0,5x')}}" alt="taraznir logo" style="height: 50px">
                            </a>
                        </div>
                        <div class="content-box">
                            <h6>خدمات اصلی</h6>
                            <ul class="page-list-two" style="font-family: AzarMehr">
                                @if( !empty($menus->footer_first_menu->items) )
                                    @foreach($menus->footer_first_menu->items as $item)
                                        <li class="p-2">
                                            @if( !empty(index_checker( $item ,'data' )) )
                                                <a
                                                    href="{{$item['data']['url'] }}"
                                                    target="{{$item['data']['target'] }}"
                                                >
                                                    {{ $item['label']}}
                                                </a>
                                            @endif
                                        </li>
                                    @endforeach
                                @endif
                            </ul>

                            <h6 class="mt-5">اطلاعات تماس</h6>
                            <ul style="font-family: AzarMehr">
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-map-marker"></span>
                                        <div class="call-text">
                                            {{get_meta_value_by_key( $options ,'footer_address')}}
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-phone"></span>
                                        <div>
                                            @foreach(get_meta_values_by_key( $options ,'footer_phone') as $phone)
                                                <p class="m-0"> {{$phone}} </p>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span style="font-size: 15px" class="fa fa-envelope"></span>
                                        <div class="call-text">
                                             {{get_meta_value_by_key( $options ,'info_email')}}
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-clock-o"></span>
                                        <div class="call-text">
                                            {{get_meta_value_by_key( $options ,'work_time')}}
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
