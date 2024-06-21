@props([
    'title'     => true,
    'links'     => null,
    'container' => true,
    'ulStyle'   => null,
])


<div class="post-share-options">
    <div class="post-share-inner clearfix">
        <ul class="social-box" style="{{$ulStyle}}">
            @if($title)
                <span class="share"> @lang('theme::theme.share') :</span>
            @endif

            @foreach($links as $key => $link)
                <li>
                    <a
                        class="fa fa-{{$key == 'telegram' ? 'send' : $key}}"
                        href="{{$link}}"
                    ></a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

