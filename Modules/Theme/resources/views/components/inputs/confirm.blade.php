@props([
    'id' => null
])

<div class="fv-row mb-8">
    <label class="form-check form-check-inline">
        <input wire:model="{{$id}}" class="form-check-input" type="checkbox"/>
        <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
            {{$slot}}
        </span>
    </label>
    <x-theme::error key="{{$id}}" />
</div>
