<?php

namespace App\Http\Livewire\Checkout;

use Livewire\Component;

class CheckoutComponent extends Component
{
    public $name , $password , $password_confirmation , $email ,  $phone_number , $zip ,  $address  , $city , $additional_info;
    protected $rules = [
        'name' => 'required' ,
        'password' =>  ['required','same:password_confirmation'],
        'phone_number' => 'required',
        'email' => ['required' , 'unique:users,email'],
        'password_confirmation' => 'required',
        'zip' => 'required',
        'address' => 'required',
        'additional_info' => 'sometimes',

    ];
    public function render()
    {
        return view('livewire.checkout.checkout-component')->extends('layouts.base')->section('content');
    }
    public function submit(){
        $this->validate();
    }
}
