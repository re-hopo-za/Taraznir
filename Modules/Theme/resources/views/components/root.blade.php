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
        <div class="auto-container">
            <div class="row clearfix">
                {{$slot}}
            </div>
        </div>
    @else
        {{$slot}}
    @endif

    @livewire('theme::layout.footer')
</div>

