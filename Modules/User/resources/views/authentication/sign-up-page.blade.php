
<div>
    <section class="page-title">
        <div class="auto-container">
            <h2>Login Page</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Register</li>
            </ul>
        </div>
    </section>

    <div class="register-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="styled-form">
                            <h4>Sign Up</h4>
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" name="username" value="" placeholder="Enter your name*" required>
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="emaill" value="" placeholder="Enter Email Adress" required>
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" name="password" value="" placeholder="Create password" required>
                                </div>
                                <div class="form-group">
                                    <div class="check-box">
                                        <input type="checkbox" name="remember-password" id="type-1">
                                        <label for="type-1">I agree to al <a href="#">Terms</a> & <a href="#">Condition</a> and Feeds</label>
                                    </div>
                                </div>
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
                                <div class="form-group">
                                    <button type="button" class="theme-btn btn-style-one">
                                        Sign Up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="styled-form">
                            <h4>Login here</h4>
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="emaill" value="" placeholder="Enter Email Adress" required>
                                </div>

                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" name="password" value="" placeholder="Create password" required>
                                </div>
                                <div class="form-group">
                                    <div class="check-box">
                                        <input type="checkbox" name="remember-password" id="type-2">
                                        <label for="type-2">Remember Me?</label>
                                    </div>
                                </div>
                                <x-theme::inputs.captcha
                                    label="user::auth.Captcha"
                                    :captchaImg="$this->captchaImg"
                                />
                                <div class="form-group">
                                    <button type="button" class="theme-btn btn-style-one">
                                        Login here
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









