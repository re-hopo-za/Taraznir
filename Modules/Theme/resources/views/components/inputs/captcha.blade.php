@props([
    'label'       => null,
    'captchaImg'  => false
])


<div>
    <div class="form-group d-flex">
        <i class="fa fa-shield"></i>
        <input wire:model="captcha" placeholder="@lang($label)" name="captcha" type="text" autocomplete="off" class="form-control bg-transparent" style="border-top-left-radius: 0;border-bottom-left-radius:0 " />
        <img src="@php echo $captchaImg @endphp" style="width: 110px; border-top-left-radius: 0.75rem; border-bottom-left-radius: 0.75rem;" alt="captcha">
        <span wire:click="reloadCaptcha" class="btn btn-sm btn-icon position-absolute translate-middle top-50 " style="left: -15px;">
             <i class="fa fa-refresh fs-5"></i>
        </span>
    </div>
    <x-theme::error key="captcha" />
</div>
