<?php

namespace Modules\User\app\Livewire\Authentication;

use Exception;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Core\app\Traits\AlertTrait;
use Modules\User\app\Http\Controllers\AuthenticationController;
use Modules\User\app\Models\User;



class AuthenticationPage extends Component
{
    use AlertTrait;

    public ?string $first_name;
    public ?string $last_name;
    public ?string $username;
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
            'first_name'   => ['required' ,'string' ,'max:20'],
            'last_name'    => ['nullable' ,'string' ,'max:50'],
            'username'     => ['required' ,'min:4'  ,'lowercase' ,'alpha:ascii' ,'string' ,'max:50' ,'unique:users'],
            'password'     => ['required' ,'string' ,'confirmed' ,$pass_rules],
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

            $this->topRightAlert(
                __('user::auth.wrong_code')
            );
            return null;
        }

        User::create([
            'first_name'  => $validated->first_name,
            'last_name'   => $validated->last_name,
            'username'    => $validated->username,
            'password'    => $validated->password
        ]);


        $this->flash('success' ,auth_trans('Please contact the energy manager to confirm the user account') , [
            'position' => 'top-end',
            'timer' => '20000',
            'toast' => true,
            'timerProgressBar' => true,
        ]);
        return redirect(route('login'));
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

        return view('user::authentication.sign-up-page');
    }
}
