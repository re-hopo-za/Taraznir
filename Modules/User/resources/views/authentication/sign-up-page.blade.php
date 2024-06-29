


<x-theme::root :breads="[
    'title'  => auth_trans('Authentication'),
    'breads' => [
        ['title' => auth_trans('Authentication')],
    ],
]">


    <div class="register-section mb-5">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row justify-content-evenly my-5">

                    <div class="column col-lg-4 col-md-5 col-sm-12" style="border: 1px solid #eee; padding:3rem;">
                        <div class="styled-form">
                            <h4>{{auth_trans('Sign up')}}</h4>
                            <form>
                                <div class="form-group">
                                    <label>{{auth_trans('Name')}}</label>
                                    <input type="text" name="username" placeholder="{{auth_trans('Enter your username')}}" required>
                                </div>
                                <div class="form-group">
                                    <label>{{auth_trans('Email')}}</label>
                                    <input type="email" name="emaill" placeholder="{{auth_trans('Enter your email')}}" required>
                                </div>
                                <div class="form-group">
                                    <label>{{auth_trans('Password')}}</label>
                                    <input type="password" name="password"  placeholder="{{auth_trans('Password')}}" required>
                                </div>
                                <x-theme::inputs.confirm
                                    id="accept_terms"
                                    :label="auth_trans('Terms')"
                                />
                                <x-theme::inputs.captcha
                                    label="{{auth_trans('Captcha')}}"
                                    :captchaImg="$this->captchaImg"
                                />
                                <div class="form-group text-center" style="position: relative; top: 15px;">
                                    <button type="button" class="theme-btn btn-style-one" style="min-width: 200px;">
                                        {{auth_trans('Sign up')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="column col-lg-4 col-md-5 col-sm-12" style="border: 1px solid #eee; padding: 30px;">
                        <div class="styled-form">
                            <h4>{{auth_trans('Sign in')}}</h4>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-theme::root>










