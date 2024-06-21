<?php

namespace Modules\User\app\Http\Controllers;


use Exception;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Modules\User\app\Service\Captcha\CaptchaBuilder;

class AuthenticationController
{


    /**
     * @throws Exception
     */
    public static function createCaptcha(): CaptchaBuilder
    {
        $font    = base_path('/Modules/User/app/Service/Captcha/Font/sketch_block.ttf');
        $phrase  = (string) rand(11111 ,99999);
        $builder = new CaptchaBuilder($phrase);
        return $builder->build( 160 ,40 ,$font);
    }


    public function logout(): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Auth::guard('web')->logout();
        return redirect('/sign-in');
    }
}
