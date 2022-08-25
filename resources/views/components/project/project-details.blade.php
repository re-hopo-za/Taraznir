<div class="content-info" dir="rtl">
    <div class="themesflat-headings style-2 clearfix">
        <h2 class="heading line-height-62">جزئیات پروژه</h2>
        <div class="sep has-width w80 accent-bg clearfix">
        </div>
    </div>
    <ul class="list-info has-icon icon-left">
        <li dir="rtl"><span class="text">کارفرما: <span class="icon"><i class="fa fa-user"></i></span></span><span class="right">{{indexChecker( $meta ,'client' ,'-')}}</span></li>
        <li><span class="text">سال اجر: <span class="icon"><i class="fa fa-usd"></i></span></span><span class="right">{{indexChecker( $meta ,'year' ,'-')}}</span></li>
        <li><span class="text">محل پروژه: <span class="icon"><i class="fa fa-search"></i></span></span><span class="right">{{indexChecker( $meta ,'location' ,'-')}} </span></li>
        <li><span class="text"> طراح:<span class="icon"><i class="fa fa-calendar"></i></span></span><span class="right">{{indexChecker( $meta ,'designer' ,'-')}}</span></li>
        <li><span class="text">مجری: <span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right">{{indexChecker( $meta ,'presenter' ,'-') }}</span></li>
        <li><span class="text">ناظر: <span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right">{{indexChecker( $meta ,'supervisor' ,'-') }}</span></li>
        <li><span class="text">دسته‌بندی: <span class="icon"><i class="fa fa-tag"></i></span></span>
            <span class="right">
                @if( !empty( $categories) )
                    @foreach( $categories as $cat )
                        {{ $loop->index > 0 ? '/' : '' }}
                        <a href="/project/category/{{$cat->slug}}">{{$cat->title}}</a>
                    @endforeach
                @endif
            </span>
        </li>
    </ul>
</div>
