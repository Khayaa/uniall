<?php

namespace App\Http\Livewire\Admin\Auth;

use Livewire\Component;

class AdminLoginComponent extends Component
{
    public $email , $password;
    protected $rules =  [
        'email' => 'required' ,
        'password'=>'required',
    ];
    public function render()
    {
        return view('livewire.admin.auth.admin-login-component')->extends('layouts.base')->section('content');
    }
    public function login(){
        $this->validate();

    }
}
