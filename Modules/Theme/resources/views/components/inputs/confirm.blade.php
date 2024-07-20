@props([
    'id'    => null,
    'label' => null

])

<div class="form-group">
    <div class="d-flex align-items-center gap-3">
        <input wire:model="{{$id}}" type="checkbox" name="{{$id}}" id="{{$id}}">
        <label class="m-0" for="{{$id}}">{{$label}}</label>
    </div>
    <x-theme::error key="{{$id}}" />
</div>
