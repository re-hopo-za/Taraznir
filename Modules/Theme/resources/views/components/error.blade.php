@props([
    'key'   => null,
    'class' => null,
])
@error($key) <div class="invalid-feedback {{$class}}">{{$message}}</div> @enderror
