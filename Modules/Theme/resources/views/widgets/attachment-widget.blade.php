<div class="sidebar-widget-two download-widget">
    <div class="sidebar-title-two" dir="rtl">
        <h6 class="text-white">
            {{$this->title}}
        </h6>
    </div>

    <ul class="download-file">
        @foreach($this->model->getMedia('attachment') as $attachment )
            <li>
                <a href="{{$attachment->getUrl()}}" target="_blank">
                    {{$attachment->name}}
                    {!!file_extension_icon($attachment->getPath())  !!}
                </a>
            </li>
        @endforeach
    </ul>
</div>
