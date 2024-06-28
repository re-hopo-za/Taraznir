@props([
    'label'       => null,
    'id'          => null,
    'placeholder' => null,
    'value'       => null,
    'help'        => null,
    'hint'        => null,
    'inputClass'  => null,
    'holderClass' => null,
    'horizontal'  => false,
    'required'    => false,
    'disabled'    =>  false
])

@if($horizontal)
    <div class="row mb-8 justify-content-between {{$holderClass}}">
        <div class="col-xl-4">
            <div class="fs-6 fw-semibold mt-2 mb-3">
                @lang($label)
                @if($hint)
                    <span class="ms-1" data-bs-toggle="tooltip" data-bs-original-title="{{$hint}}" data-kt-initialized="{{$id}}">
                        <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xl-8 fv-row fv-plugins-icon-container">
            <textarea
                @if($wireType) {{$wireType}}="{{$id}}" @endif
                type="text"
                class="form-control mb-2 {{$inputClass}}"
                name="{{$id}}"
                placeholder="{{$placeholder}}"
            >
                {{$value}}
            </textarea>

            @error($id)
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            @if($help)
                <div class="text-muted fs-7 mt-1">{{$help}}</div>
            @endif
        </div>
    </div>
@else
    <div class="{{$holderClass}}">
        <label
            @class([
                'form-label',
                'required' => $required
            ])
            for="{{$id}}"
        >
            @lang($label)
            @if($hint)
                <span class="ms-1" data-bs-toggle="tooltip" data-bs-original-title="{{$hint}}" data-kt-initialized="{{$id}}">
                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                </span>
            @endif
        </label>
        <textarea
            wire:model="{{$id}}"
            type="text"
            class="form-control mb-2 {{$inputClass}}"
            name="{{$id}}"
            placeholder="{{$placeholder}}"
            {{$disabled ? 'disabled' : null}}
        >
            {{$value}}
            </textarea>
        @if($help)
            <div class="text-muted fs-7">{{$help}}</div>
        @endif
        @error($id)
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                {{$message}}
            </div>
        @enderror
        @if($hint)
            <span
                class="ki-outline ki-question-2"
                data-bs-toggle="tooltip"
                data-bs-custom-class="tooltip-inverse"
                data-bs-placement="top"
                title="{{$hint}}"
            ></span>
        @endif
    </div>
@endif


