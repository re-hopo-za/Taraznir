<div class="portfolio-single__inner">
    <h3 class="title">
        {{$this->title}}
    </h3>
    <ul class="portfolio-single__widget">
        @foreach($this->items as $key => $val )
            <li class="d-flex justify-content-between align-items-center">
                <strong>{{$key}}:</strong>
                {{$val}}
            </li>
        @endforeach
    </ul>
</div>
