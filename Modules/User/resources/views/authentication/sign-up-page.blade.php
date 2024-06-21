@push('styles')
    <style>
        body ,[data-bs-theme="dark"] body {
            background-image: url('{{getMediaOption($this->settings->get('authentication_page_background'))}}');
        }
    </style>
@endpush

@section('application_logo'  ,getMediaOption($this->settings->get('authentication_page_logo')) )
@section('application_title' ,$this->settings->get('authentication_page_text')?->value)
@section('page_title'        ,__('user::auth.Sign up'))
@section('page_sub_title'    ,__('user::auth.Sign up with username and password'))

<x-theme::tags.form class="form w-100" id="kt_sign_up_form">
    <div class="text-center mb-11">
        <h1 class="text-gray-900 fw-bolder mb-3">
            @lang('user::auth.Sign up')
        </h1>
    </div>
    <div class="separator separator-content my-14">
        <span class="w-275px text-gray-500 fw-semibold fs-7">
            @lang('user::auth.Sign up with username and password')
        </span>
    </div>
    <x-theme::inputs.text
        wireType="wire:model"
        label="user::auth.Name"
        icon="ki-outline ki-user"
        id="first_name"
        class="mb-8"
    />
    <x-theme::inputs.text
        wireType="wire:model"
        label="user::auth.Last name"
        icon="ki-outline ki-profile-user"
        id="last_name"
        class="mb-8"
    />
    <x-theme::inputs.text
        wireType="wire:model"
        label="user::auth.Username"
        icon="ki-outline ki-security-user"
        id="username"
        class="mb-8"
    />
    <x-theme::inputs.password
        label="user::auth.Password"
        hasMeter="true"
    />
    <x-theme::inputs.password
        label="user::auth.Repeat password"
        confirm="true"
    />
    <x-theme::inputs.captcha
        label="user::auth.Captcha"
        :captchaImg="$this->captchaImg"
    />
    <x-theme::inputs.confirm
        id="accept_terms"
    >
        <a href="javascript:void(0)" class="ms-1 link-primary">
            @lang('user::auth.Terms')
        </a>
        @lang('user::auth.I accept')
    </x-theme::inputs.confirm>

    <x-theme::inputs.submit
        label="user::auth.Sign up"
        type="auth"
    />

    <div class="text-gray-500 text-center fw-semibold fs-6">
        @lang('user::auth.Already have an Account?')
        <a href="{{route('login')}}" class="link-primary fw-semibold">
            @lang('user::auth.Sign in')
        </a>
    </div>
</x-theme::tags.form>





