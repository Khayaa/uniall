<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class CartComponent extends Component
{
    public function render()
    {
        return view('livewire.cart.cart-component')->extends('layouts.base')->section('content');
    }
}
