@props([
    'label'       => null,
    'captchaImg'  => false
])

<div class="position-relative mb-3">
    <div class="input-group mb-5">
        <span class="input-group-text" id="basic-addon1">
            <i class="ki-outline ki-lock-2 fs-1"></i>
        </span>
        <input wire:model="captcha" placeholder="@lang($label)" name="captcha" type="text" autocomplete="off" class="form-control bg-transparent" />
        <img src="@php echo $captchaImg @endphp" style="width: 121px; border-top-left-radius: 0.75rem; border-bottom-left-radius: 0.75rem;" alt="captcha">
        <span wire:click="reloadCaptcha" class="btn btn-sm btn-icon position-absolute translate-middle top-50 me-n2" style="left: -45px;">
            <i class="ki-outline ki-arrows-circle fs-2"></i>
        </span>
    </div>
    <x-theme::error key="captcha" />
</div>

