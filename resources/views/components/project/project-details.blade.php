<div class="content-info" dir="rtl">
    <div class="themesflat-headings style-2 clearfix">
        <h2 class="heading line-height-62">جزئیات پروژه</h2>
        <div class="sep has-width w80 accent-bg clearfix">
        </div>
    </div>
    <ul class="list-info has-icon icon-left">
        <li style="display: flex;justify-content: space-between" dir="rtl"><span class="text">کارفرما: <span class="icon"><i class="fa fa-user"></i></span></span><span class="">{{indexChecker( $meta ,'client' ,'-')}}</span></li>
        <li style="display: flex;justify-content: space-between"><span class="text">سال اجر: <span class="icon"><i class="fa fa-usd"></i></span></span><span class="">{{indexChecker( $meta ,'year' ,'-')}}</span></li>
        <li style="display: flex;justify-content: space-between"><span class="text">محل پروژه: <span class="icon"><i class="fa fa-search"></i></span></span><span class="">{{indexChecker( $meta ,'location' ,'-')}} </span></li>
        <li style="display: flex;justify-content: space-between"><span class="text"> طراح:<span class="icon"><i class="fa fa-calendar"></i></span></span><span class="">{{indexChecker( $meta ,'designer' ,'-')}}</span></li>
        <li style="display: flex;justify-content: space-between"><span class="text">مجری: <span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="">{{indexChecker( $meta ,'presenter' ,'-') }}</span></li>
        <li style="display: flex;justify-content: space-between"><span class="text">ناظر: <span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="">{{indexChecker( $meta ,'supervisor' ,'-') }}</span></li>
        <li style="display: flex;justify-content: space-between"><span class="text">دسته‌بندی: <span class="icon"><i class="fa fa-tag"></i></span></span>
            <span class="">
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

