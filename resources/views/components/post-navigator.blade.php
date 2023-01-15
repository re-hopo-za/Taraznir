<div class="themesflat-pagination clearfix no-border padding-top-17">
    <ul class="page-prev-next">

        <li>
            @if( !empty( $previous ) && isset( $previous->title ) )
                <a href="{{ route( $singleRoute, $previous->slug) }}" class="prev">
                    {{$previous->title}}
                </a>
            @endif
        </li>

        <li class="text-right">
            @if( !empty( $next ) && isset( $next->title ) )
                <a href="{{ route($singleRoute, $next->slug) }}" class="next">
                    {{$next->title}}
                </a>
            @endif
        </li>
    </ul>
</div>
