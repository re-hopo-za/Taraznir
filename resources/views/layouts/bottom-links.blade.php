<div id="bottom" class="clearfix has-spacer">
    <div id="bottom-bar-inner" class="container">
        <div class="bottom-bar-inner-wrap">
            <div class="bottom-bar-content">
                <div id="copyright" dir="rtl">© <span class="text">  تمام حقوق برای <a href="/" class="text-accent">Taraznir</a> محفوظ است </span>
                </div>
            </div>
            <div class="bottom-bar-menu">
                <ul class="bottom-nav">
                    @if( !empty( $menu->items ) )
                        @foreach($menu->items as $item)
                            <li class="menu-item {{returnValueIsTrue( $item ,'children' ,'menu-item-has-children')}} {{checkCurrentPage( $item['data']['url'] )}}">
                                @if( !empty( indexChecker( $item ,'data' )) )
                                    <a href="{{  $item['data']['url'] }}" target="{{ $item['data']['target'] }}">{{ $item['label'] }}</a>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
