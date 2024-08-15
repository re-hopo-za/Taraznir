@props([
    'sidebar' => true,
    'breads'  => [],
])

<div class="page-wrapper">
    <livewire:theme::layout.header />
    @livewire('theme::layout.sidebar')

    @if($breads)
        <x-theme::breads
            :breads="$breads"
        />
    @endif

    @if($sidebar)
        <div class="auto-container" style="padding-bottom: 10rem;">
            <div class="row clearfix">
                {{$slot}}
            </div>
        </div>
    @else
        <div class="root-content" style="padding-bottom: 10rem;">
            {{$slot}}
        </div>
    @endif

    @livewire('theme::layout.footer')
</div>

