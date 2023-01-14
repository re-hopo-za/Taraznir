<div class="content-info info-brochures">
    <div class="themesflat-headings style-2 clearfix" dir="rtl">
        <h2 class="heading line-height-62 text-right">
            <span style="font-size: 16px;font-weight: bold;color:#555">فایل‌های ضمیمه</span>
        </h2>
        <div class="sep has-width w60 accent-bg clearfix"> </div>
    </div>
    <div class="themesflat-spacer clearfix" data-desktop="34" data-mobile="35" data-smobile="35"></div>
    @if( !empty( $attachments ))
        @foreach( $attachments as $attachment )
            @php( $path = str_replace(['https://taraznir.com/storage/','https://taraznir.dev/storage/'],'', $attachment->getUrl()) )
            <div class="button-wrap has-icon icon-left size-14 pf21">
                <a target="_blank" href="/pdf-viewer?file={{$path}}" class="themesflat-button font-default bg-light-white w100 d-flex my-3 flex-row-reverse justify-content-between">
                    <span style=" display:block;width:200px;overflow:hidden;text-overflow: ellipsis;white-space: nowrap;direction: rtl;padding:0" >
                        {{$attachment->name}}
                    </span>
                    <span class="icon p-0">
                        {!!  fileIcon( $attachment->getPath() ) !!}
                    </span>
                </a>
            </div>
        @endforeach
    @else
        <span> بدون فایل ضمیمه </span>
    @endif
</div>
