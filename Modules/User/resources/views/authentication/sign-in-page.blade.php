@push('styles')
    <style>
        body ,[data-bs-theme="dark"] body {
            background-image: url('{{getMediaOption($this->settings->get('authentication_page_background'))}}');
        }
    </style>
@endpush

@section('application_logo'  ,getMediaOption($this->settings->get('authentication_page_logo')) )
@section('application_title' ,$this->settings->get('authentication_page_text')?->value)
@section('page_title'        ,__('user::auth.Sign in'))
@section('page_sub_title'    ,__('user::auth.Sign in with username and password'))

<x-theme::tags.form class="form w-100" id="kt_sign_in_form">
    <div class="text-center mb-11">
        <h1 class="text-gray-900 fw-bolder mb-3">
            @yield('page_title')
        </h1>
    </div>
    <div class="separator separator-content my-14">
        <span class="w-250px text-gray-500 fw-semibold fs-7">
            @yield('page_sub_title')
        </span>
    </div>
    <x-theme::inputs.text
        label="user::auth.Username"
        wireType="wire:model"
        icon="ki-outline ki-security-user"
        id="username"
        class="mb-8"
    />
    <x-theme::inputs.password

        label="user::auth.Password"
    />
    <x-theme::inputs.captcha
        label="user::auth.Captcha"
        :captchaImg="$this->captchaImg"
    />
    <x-theme::inputs.confirm
        id="remember"
    >
        @lang('user::auth.Remember me')
    </x-theme::inputs.confirm>
    <x-theme::inputs.submit
        label="user::auth.Sign in"
        type="auth"
    />
    <div class="text-gray-500 text-center fw-semibold fs-6">
        @lang('user::auth.Not a Member yet?')
        <a href="{{route('register')}}" class="link-primary">@lang('user::auth.Sign up')</a>
    </div>
</x-theme::tags.form>







