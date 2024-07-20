<?php

namespace Modules\User\app\Livewire;

use Exception;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Core\app\Traits\AlertTrait;
use Modules\User\app\Http\Controllers\AuthenticationController;
use Modules\User\app\Models\User;



class SignUpPage extends Component
{
    use AlertTrait;

    public ?string $name;
    public ?string $email;
    public ?string $password;
    public ?string $password_confirmation;
    public ?string $captcha;
    public ?string $accept_terms;

    public ?string $captchaImg = null;
    public ?string $captchaKey = null;

    protected function rules(): array
    {
        $pass_rules = Password::min(8);
        $pass_rules->numbers();

        return [
            'name'         => ['required' ,'string' ,'max:50'],
            'email'        => ['required' ,'email'  ,'unique:users'],
            'password'     => ['required' ,'string' ,$pass_rules],
            'captcha'      => ['required' ,'string' ,'min:4'],
            'accept_terms' => ['accepted'],
        ];
    }


    /**
     * @throws ValidationException
     */
    public function submit()
    {
        $validated =(object) $this->validate();
        if (strtolower($this->captchaKey) !== strtolower($validated->captcha) ) {
            $this->captcha = null;
            return $this->topRightAlert(
                auth_trans('Wrong code')
            );
        }

        User::create([
            'name'        => $validated->name,
            'email'       => $validated->email,
            'password'    => $validated->password
        ]);

        $this->topRightFlush(
            auth_trans('Sign up successfully'),
            'success'
        );
        return redirect(route('sign-in'));
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
     * @throws Exception
     */
    #[Layout('theme::layout.app')]
    public function render():View
    {
        $captcha = AuthenticationController::createCaptcha();
        $this->captchaImg = $captcha->inline();
        $this->captchaKey = $captcha->getPhrase();

        return view('user::auth.sign-up-page');
    }
}
