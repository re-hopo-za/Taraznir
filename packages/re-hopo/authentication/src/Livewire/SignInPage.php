<?php

namespace ReHo\Authentication\Livewire\Authentication;

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
use Modules\User\app\Models\User;

class SignInPage extends Component
{
    use AlertTrait;

    public ?string $username = null;
    public ?string $password = null;
    public ?string $captcha  = null;
    public ?string $remember = null;

    public ?string $captchaImg = null;
    public ?string $captchaKey = null;
    public ?object $settings   = null;

    protected function rules(): array
    {
        return [
            'username'  => ['required' ,'exists:users'],
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
        try {
            $validated =(object) $this->validate();

        } catch (ValidationException $e) {
            $this->captcha = null;
            $items = [];
            foreach ($e->validator->failed() as $key => $errors)
                foreach ($errors as $key_error => $error)
                    $items[$key] [] = $key_error;

            addCustomLog(new User() ,'invalid_inputs' ,[
                'status' => 'error',
                'inputs' => $items
            ] ,'login');
            throw $e;
        }

        if (strtolower($this->captchaKey) !== strtolower($validated->captcha)) {
            $this->captcha = null;
            $this->topRightAlert(
                __('user::auth.wrong_code')
            );

            addCustomLog(new User() ,'wrong_captcha' ,[
                'status'      => 'error',
                'inputs'      => [
                    'username'   => $validated->username,
                    'captcha'    => $validated->captcha,
                    'captchaKey' => $this->captchaKey,
                ]
            ] ,'login');
            return null;
        }
        self::authenticate($validated);

        addCustomLog(new User() ,'successfully_login' ,[
            'status'      => 'success',
            'inputs'      => [
                'username'   => $validated->username,
                'captchaKey' => $this->captchaKey,
            ]
        ] ,'login');

        return redirect()->intended();
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
        $options                             = getOptionsByLikeKey('%authentication_%');
        $authentication_wrong_password_count = index_checker($options ,'incorrect_password_entries' ,5);
        $authentication_ban_time             = index_checker($options ,'blocking_time' ,60);

        if(RateLimiter::tooManyAttempts(self::throttleKey($inputs) ,$authentication_wrong_password_count)){
            $this->captcha = null;
            $seconds = RateLimiter::availableIn(self::throttleKey($inputs));
            addCustomLog(new User() ,'too_many_attempts' ,[
                'status'      => 'error',
                'inputs'      => [
                    'username' => $inputs->username,
                ]
            ] ,'login');

            throw ValidationException::withMessages([
                'username' => 'تلاش بیش از حد مجاز.  لطفا بعد از '.
                    CarbonInterval::seconds($seconds)->cascade()->forHumans()
                    .' دیگر تلاش کنید.'
            ]);
        }

        if (!Auth::attempt(['username' => $inputs->username ,'password' => $inputs->password ,'is_active' => 1] ,(bool)$inputs->remember)) {
            RateLimiter::hit(self::throttleKey($inputs) ,$authentication_ban_time);
            addCustomLog(new User() ,'invalid_information' ,[
                'status'      => 'error',
                'inputs'      => [
                    'username'   => $inputs->username
                ]
            ] ,'login');

            throw ValidationException::withMessages([
                'username' => __('user::auth.failed'),
            ]);
        }

        RateLimiter::clear(self::throttleKey($inputs));
        return true;
    }


    public static function throttleKey( object $inputs ): string
    {
        return Str::lower($inputs->username) . '|' . Request::ip();
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

        return view('auth::sign-in');
    }
}
