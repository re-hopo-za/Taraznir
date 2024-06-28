@props([
    'id'          => null,
    'holderClass' => null,
    'imageClass'  => null,
])
<div class="d-flex flex-center flex-shrink-0 bg-light rounded h-100px h-lg-150px me-7 mb-4 w-100 {{$holderClass}}">
    <img
        id="{{$id}}"
        class="{{$imageClass}}"
        alt="image"
        src="/images/default/blank-image.svg"
    />
</div>
