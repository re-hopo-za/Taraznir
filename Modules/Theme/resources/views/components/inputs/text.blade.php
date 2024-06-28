@props([
    'label'       => null,
    'wireType'    => null,
    'id'          => null,
    'placeholder' => null,
    'value'       => null,
    'help'        => null,
    'hint'        => null,
    'holderClass' => null,
    'inputClass'  => null,
    'horizontal'  => false,
    'required'    => false,
    'icon'        => null,
    'disabled'    => null,
    'validation'  => 'text',
])

@if($icon)
    <div class="fv-row {{$holderClass}}">
        <div class="input-group mb-5">
            <span class="input-group-text" id="{{$id}}">
                <i class="{{$icon}} fs-1"></i>
            </span>
            <input
                @if($validation === 'text')
                    type="text"
                @elseif($validation === 'number')
                    type="number"
                @elseif($validation === 'float')
                    type="number"
                @style(['text-align' => 'left'])
                    step="0.01"
                @endif
                class="form-control {{$inputClass}}"
                placeholder="@lang($label)"
                name="{{$id}}"
                id="{{$id}}"
                @if($wireType) {{$wireType}}="{{$id}}" @endif
                value="{{!$wireType ? $value  : null}}"
                {{$disabled || (isset($this->{"$id"."_disabled"}) && $this->{"$id"."_disabled"}) ? 'disabled' : null}}
            />
            @if($wireType)
                <x-theme::error key="{{$id}}" />
            @endif
        </div>
    </div>
@elseif($horizontal)
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
            <input
                @if($validation === 'text')
                    type="text"
                @elseif($validation === 'number')
                    type="number"
                @elseif($validation === 'float')
                    type="number"
                @style(['text-align' => 'left'])
                step="0.01"
            @endif
                @if($wireType) {{$wireType}}="{{$id}}" @endif
                class="form-control mb-2 {{$inputClass}}"
                name="{{$id}}"
                id="{{$id}}"
                placeholder="{{$placeholder}}"
                value="{{!$wireType ? $value  : null}}"
                {{$disabled || (isset($this->{"$id"."_disabled"}) && $this->{"$id"."_disabled"}) ? 'disabled' : null}}
            />
            @if($wireType)
                @error($id)
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            @endif
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
        <input
            @if($validation === 'text')
                type="text"
            @elseif($validation === 'number')
                type="number"
            @elseif($validation === 'float')
                type="number"
                @style(['text-align' => 'left'])
                step="0.01"
            @endif
            @if($wireType) {{$wireType}}="{{$id}}" @endif
            name="{{$id}}"
            id="{{$id}}"
            class="form-control mb-2 {{$inputClass}}"
            placeholder="{{$placeholder}}"
            value="{{!$wireType ? $value  : null}}"
            {{$disabled || (isset($this->{"$id"."_disabled"}) && $this->{"$id"."_disabled"}) ? 'disabled' : null}}
        />
        @if($help)
            <div class="text-muted fs-7">{{$help}}</div>
        @endif
        @if($wireType)
            @error($id)
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        @endif
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


