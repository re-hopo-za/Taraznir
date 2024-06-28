@props([
    'breads' => []
])

<section class="page-title" style="margin-bottom: 4rem">
    <div class="auto-container">
        <h2>
            @lang($breads['title'])
        </h2>
        <ul class="bread-crumb clearfix">
            <li>
                <a href="/">
                    {{global_trans('Home')}}
                </a>
            </li>

            @foreach($breads['breads'] as $bread)
                <li>
                    @if(isset($bread['a']))
                        <a href="/product">
                            {{$bread['title']}}
                        </a>
                    @else
                        {{$bread['title']}}
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</section>
