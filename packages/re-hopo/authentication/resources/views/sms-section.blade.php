<form>
    <div class="form-group">
        <label>{{auth_trans('Email')}}</label>
        <input type="email" name="emaill" placeholder="{{auth_trans('Enter your email')}}" required>
    </div>
    <div class="form-group">
        <label>{{auth_trans('Password')}}</label>
        <input type="password" name="password"  placeholder="{{auth_trans('Password')}}" required>
    </div>
    <x-theme::inputs.confirm
        id="remember"
        :label="auth_trans('Remember me')"
    />

    <x-theme::inputs.captcha
        label="{{auth_trans('Captcha')}}"
        :captchaImg="$this->captchaImg"
    />
    <div class="form-group text-center" style="position: relative; top: 15px;">
        <button type="button" class="theme-btn btn-style-one" style="min-width: 200px;">
            {{auth_trans('Sign in')}}
        </button>
    </div>
    <div class="form-group d-flex justify-content-center align-items-center mt-5">
        <a href="/sign-up">
            {{auth_trans('Sign up')}}
        </a>
    </div>
</form>









