@props([
    'label'       => null,
    'id'          => null,
    'help'        => null,
    'hint'        => null,
    'class'       => null,
    'horizontal'  => false,
    'dir'         => 'ltr'
])


@if($horizontal)
    <div class="row mb-8 justify-content-between {{$class}}">
        <div class="col-xl-4">
            <div class="fs-6 fw-semibold mt-2 mb-3">
                {{$label}}
                @if($hint)
                    <span class="ms-1" data-bs-toggle="tooltip" data-bs-original-title="{{$hint}}" data-kt-initialized="{{$id}}">
                        <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xl-8">
            <div class="form-check form-switch form-check-custom form-check-solid" @style([
                'display: block' => $help
            ])>
                <input
                    wire:model="{{$id}}"
                    class="form-check-input"
                    type="checkbox"
                    name="{{$id}}"
                    id="{{$id}}"
                    @checked($this->{$id})
                />

                <label class="form-check-label fw-semibold text-gray-500 ms-3" for="{{$id}}" @style([
                    'margin-top: 6px' => $help
                ])>
                    {{$this->{$id} ? 'فعال' : 'غیر فعال'}}
                </label>

                @if($help)
                    <div class="text-muted fs-7 mt-1">{{$help}}</div>
                @endif
            </div>
        </div>
    </div>
@else
    <div class="{{$class}}" dir="{{$dir}}">
        <label
            @class([
                'form-label'
            ])
            for="{{$id}}"
        >
            {{$label}}
        </label>
        <input
            wire:model="{{$id}}"
            class="form-check-input me-2"
            type="checkbox"
            name="{{$id}}"
            id="{{$id}}"
            @checked($this->{$id})
        />
        @if($help)
            <div class="text-muted fs-7">{{$help}}</div>
        @endif
        @if($hint)
            <span class="ms-1" data-bs-toggle="tooltip" data-bs-original-title="{{$hint}}" data-kt-initialized="{{$id}}">
                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
            </span>
        @endif
    </div>
@endif

