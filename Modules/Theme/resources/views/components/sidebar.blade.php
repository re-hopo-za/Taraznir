@props([
    'dir' => 'right',
    'left_side_class' => false
])


@if($dir == 'right')
    <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 right-sidebar">
@else
    <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12 left-sidebar">
        <aside class="sidebar sticky-top">
            <div class="sidebar-inner {{$left_side_class}}">
@endif

    {{$slot}}

@if($dir == 'right')
    </div>
@else
            </div>
        </aside>
    </div>
@endif




