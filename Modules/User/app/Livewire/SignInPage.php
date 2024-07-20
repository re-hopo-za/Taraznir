<?php

namespace Modules\User\app\Livewire;

use Carbon\CarbonInterval;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Core\app\Traits\AlertTrait;
use Modules\User\app\Http\Controllers\AuthenticationController;

class SignInPage extends Component
{
    use AlertTrait;

    public ?string $email    = null;
    public ?string $password = null;
    public ?string $captcha  = null;
    public ?string $remember = null;

    public ?string $captchaImg = null;
    public ?string $captchaKey = null;
    public ?object $settings   = null;

    protected function rules(): array
    {
        return [
            'email'     => ['required' ,'exists:users'],
            'password'  => ['required'],
            'remember'  => ['nullable'],
            'captcha'   => ['required'],
        ];
    }


    /**
     * @throws ValidationException
     */
    public function submit()
    {
        $validated =(object) $this->validate();

        if (strtolower($this->captchaKey) !== strtolower($validated->captcha)) {
            $this->captcha = null;
            return $this->topRightAlert(
                auth_trans('Wrong code')
            );
        }

        self::authenticate($validated);
        return redirect(route('/'));
    }


    /**
     * @throws Exception
     */
    public function reloadCaptcha(): void
    {
        $captcha = AuthenticationController::createCaptcha();
        $this->captchaImg = $captcha->inline();
        $this->captchaKey = $captcha->getPhrase();
    }

    /**
     * @throws ValidationException
     * @throws Exception
     */
    public function authenticate($inputs): array|bool
    {

        $authentication_wrong_password_count = 5;
        $authentication_ban_time             = 60;

        if(RateLimiter::tooManyAttempts(self::throttleKey($inputs) ,$authentication_wrong_password_count)){
            $this->captcha = null;
            $seconds = RateLimiter::availableIn(self::throttleKey($inputs));

            throw ValidationException::withMessages([
                'email' => 'تلاش بیش از حد مجاز.  لطفا بعد از '.
                    CarbonInterval::seconds($seconds)->cascade()->forHumans()
                    .' دیگر تلاش کنید.'
            ]);
        }

        if (!Auth::attempt(['email' => $inputs->email ,'password' => $inputs->password] ,(bool)$inputs->remember)) {
            RateLimiter::hit(self::throttleKey($inputs) ,$authentication_ban_time);

            throw ValidationException::withMessages([
                'email' => auth_trans('Failed'),
            ]);
        }

        RateLimiter::clear(self::throttleKey($inputs));
        return true;
    }


    public static function throttleKey( object $inputs ): string
    {
        return Str::lower($inputs->email) . '|' . Request::ip();
    }


    /**
     * @throws Exception
     */
    #[Layout('theme::layout.app')]
    public function render():View
    {
        $captcha = AuthenticationController::createCaptcha();
        $this->captchaImg = $captcha->inline();
        $this->captchaKey = $captcha->getPhrase();

        return view('user::auth.sign-in-page');
    }
}
