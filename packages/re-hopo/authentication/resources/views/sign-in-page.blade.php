<x-theme::root :breads="[
    'title'  => auth_trans('Sign up'),
    'breads' => [
        ['title' => auth_trans('Sign up')],
    ],
]">


    <div class="register-section" style="margin-bottom: 5rem">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row justify-content-evenly">
                    <div class="column col-lg-6 col-md-6 col-sm-12" style=" padding:3rem;">
                        <div class="styled-form">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-theme::root>










