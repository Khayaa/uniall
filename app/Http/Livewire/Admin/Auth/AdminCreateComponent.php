<?php

namespace App\Http\Livewire\Admin\Auth;

use Livewire\Component;

class AdminCreateComponent extends Component
{
    public $name , $email , $phone_number , $password , $password_confirmation ;
    protected $rules = [
        'name' => 'required',
        'email' => ['required', 'unique:admins,email'],
        'phone_number'=> 'required',
        'password'=> ['required' , 'same:password_confirmation'] ,
        'password_confirmation' => 'required'
    ];
    public function render()
    {
        return view('livewire.admin.auth.admin-create-component')->extends('layouts.base')->section('content');
    }
    public function create(){
        $this->validate();

    }
}
