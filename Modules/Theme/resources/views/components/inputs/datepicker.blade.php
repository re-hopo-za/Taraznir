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
    'class'       => null,
    'horizontal'  => false,
    'required'    => false,
    'disabled'    => null,
])

<div class="{{$holderClass}}">
    <label
        @class([
            'form-label fs-7',
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
    <div class="input-group">
        @if(!isset($this->hide_datepicker_icon))
            <span class="input-group-text" id="{{$id}}">
                <i class="ki-outline ki-calendar-2 fs-1"></i>
            </span>
        @endif
        <input
            @if($wireType) {{$wireType}}="{{$id}}" @endif
            type="text"
            class="form-control {{$inputClass}}"
            name="{{$id}}"
            value="{{!$wireType ? $value  : null}}"
            {{$disabled ? 'disabled' : null}}
            data-jdp
            autocomplete="off"
        />
        <x-theme::error key="{{$id}}" />
    </div>
</div>







