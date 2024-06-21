<?php

namespace Modules\User\app\Livewire\Authentication;

use Exception;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\User\app\Http\Controllers\AuthenticationController;

//use Modules\Core\app\Traits\AlertTrait;
//use Modules\User\app\Http\Controllers\AuthenticationController;
//use Modules\User\app\app\Models\User;

class SignUpPage extends Component
{
//    use AlertTrait;

    public ?string $first_name;
    public ?string $last_name;
    public ?string $username;
    public ?string $password;
    public ?string $password_confirmation;
    public ?string $captcha;
    public ?string $accept_terms;

    public ?string $captchaImg = null;
    public ?string $captchaKey = null;
    public ?object $settings   = null;

    protected function rules(): array
    {
        $options = getOptionsByLikeKey('%password_%');

        if($options->get('password_length')?->value)
            $pass_rules = Password::min(8);
        else
            $pass_rules = Password::min(4);

        if($options->get('password_has_number')?->value)
            $pass_rules->numbers();

        if($options->get('password_has_uppercase')?->value)
            $pass_rules->mixedCase();

        if($options->get('password_has_special_character')?->value)
            $pass_rules->symbols();

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
        try {
            $validated =(object) $this->validate();

        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->captcha = null;
            $items = [];
            foreach ($e->validator->failed() as $key => $errors)
                foreach ($errors as $key_error => $error)
                    $items[$key] [] = $key_error;

            addCustomLog(new User() ,'invalid_inputs' ,[
                'status' => 'error',
                'inputs' => $items
            ] ,'register');
            throw $e;
        }

        if (strtolower($this->captchaKey) !== strtolower($validated->captcha) ) {
            $this->captcha = null;
             addCustomLog(new User() ,'captcha_error' ,[
                'status'      => 'error',
                'inputs'      => [
                    'first_name' => $validated->first_name,
                    'last_name'  => $validated->last_name,
                    'username'   => $validated->username
                ]
            ] ,'register');

            $this->topRightAlert(
                __('user::auth.wrong_code')
            );
            return null;
        }

        User::create([
            'first_name'  => $validated->first_name,
            'last_name'   => $validated->last_name,
            'username'    => $validated->username,
            'position_id' => null,
            'password'    => $validated->password
        ]);

        addCustomLog(new User() ,'successfully_register' ,[
            'status'      => 'success',
            'inputs'      => [
                'first_name' => $validated->first_name,
                'last_name'  => $validated->last_name,
                'username'   => $validated->username
            ]
        ] ,'register');

        $this->flash('success' ,__('user::auth.Please contact the energy manager to confirm the user account') , [
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
    #[Layout('theme::layouts.authentication-app')]
    public function render():View
    {
        $captcha = AuthenticationController::createCaptcha();
        $this->captchaImg = $captcha->inline();
        $this->captchaKey = $captcha->getPhrase();
        $this->settings   = getOptionsByLikeKey('authentication%');

        return view('user::authentication.sign-up-page');
    }
}
