@props([
    'hint'        => null,
    'accept'      => '.png, .jpg, .jpeg',
    'id'          => null,
    'holderClass' => null,
    'inputClass'  => null
])

@php
    if(!empty($this->{$id})){
        $item = $this->{$id};
        $link = method_exists($item, 'temporaryUrl') ? $item->temporaryUrl() : $item;
    }else{
        $link = $this->{$id."_url"} ?? config('core.default.placeholder');
    }
@endphp

<div class="{{$holderClass}}">
    <div
        class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
        data-kt-image-input="true"
        style="background-image: url('{{$link}}')"
    >
        <div class="image-input-wrapper w-150px h-150px"></div>
        @if(!isset($this->{"$id"."_disabled"}) || !$this->{"$id"."_disabled"})
            <label
                @class([
                    'btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow'
                ])
                data-kt-image-input-action="change"
                data-bs-toggle="tooltip"
                title="انتخاب تصویر"
            >
                <i class="ki-outline ki-pencil fs-7"></i>
                <input
                    wire:model.live="{{$id}}"
                    type="file"
                    name="{{$id}}"
                    accept="{{$accept}}"
                    id="{{$id}}"
                >
                <input type="hidden" name="avatar_remove" />
            </label>
        @endif
        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="پاک کردن تصویر">
        <i class="ki-outline ki-cross fs-2"></i>
    </span>
        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="حذف تصویر">
        <i class="ki-outline ki-cross fs-2"></i>
    </span>
    </div>
    <div class="text-muted fs-7">
        {{$hint}}
    </div>
</div>

