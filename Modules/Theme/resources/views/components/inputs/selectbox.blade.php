@props([
    'label'       => null,
    'name'        => null,
    'help'        => null,
    'hint'        => null,
    'holderClass' => null,
    'horizontal'  => false,
    'style'       => null,
    'wireType'    => null,
])

@if($horizontal)
    <div class="row mb-8 justify-content-between {{$holderClass}}" @style([$style])>
        <div class="col-xl-4">
            <div class="fs-6 fw-semibold mt-2 mb-3">
                @lang($label)
                @if($hint)
                    <span class="ms-1" data-bs-toggle="tooltip" data-bs-original-title="{{$hint}}" data-kt-initialized="{{$name}}">
                        <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xl-8">
            <div class="form-check form-switch form-check-custom form-check-solid">
@else
    <div class="{{$holderClass}}" @style([$style])>
        <label
            class="form-label"
            for="{{$name}}"
        >
            @lang($label)
        </label>
        <br>
        @if($hint)
            <span class="ms-1" data-bs-toggle="tooltip" data-bs-original-title="{{$hint}}" data-kt-initialized="{{$name}}">
                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
            </span>
        @endif
@endif

    <div wire:ignore wire:ignore.self id="select-{{$name}}"></div>
    <input
        @if($wireType) {{$wireType}}="{{$name}}" @endif
        type="hidden"
        name="select-{{$name}}"
        id="{{$name}}"
        wire:ignore
    >

    <x-theme::error key="{{$name}}"/>
    @if($help)
        <div class="text-muted fs-7 mt-1">{{$help}}</div>
    @endif

    @if($horizontal)
                </div>
            </div>
        </div>
    @else
        </div>
    @endif


