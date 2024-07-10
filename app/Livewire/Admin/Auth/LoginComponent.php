<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LoginComponent extends Component
{
    public $email;
    public $password;
    public $remember;

    public function rules()
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required',
            'remember' => 'nullable'
        ];
    }

    // public function attributes()
    // {
    //     return [
    //         'password' => __('password'),
    //         'email' => __('email'),
    //     ];
    // }

    public function submit()
    {
        $this->validate();
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        };

        return to_route('home');
    }

    public function render()
    {
        return view('admin.auth.login-component');
    }
}
