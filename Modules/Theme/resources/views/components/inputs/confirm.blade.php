@props([
    'id'    => null,
    'label' => null

])

<div class="form-group">
    <div class="check-box">
        <input wire:model="{{$id}}" type="checkbox" name="{{$id}}" id="{{$id}}">
        <label for="{{$id}}">{{$label}}</label>
    </div>
    <x-theme::error key="{{$id}}" />
</div>
