@props([
    'value'    => null,
    'id'       => null,
    'wireType' => null
])

<input
    type="hidden"
    name="{{$id}}"
    value="{{!$wireType ? $value  : null}}"
    id="{{$id}}"
    @if($wireType) {{$wireType}}="{{$id}}" @endif
>