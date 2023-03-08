<?php

namespace App\Http\Livewire\Cart;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartComponent extends Component
{
    public $pq;
    public function render()
    {
        return view('livewire.cart.cart-component')->extends('layouts.base')->section('content');
    }

    public function increaseQuantity($rowId){

        $product =  Cart::get($rowId);
        $quantity = $product->qty + 1;
        Cart::update($rowId , $quantity);
    }

    public function decreaseQuantity($rowId){
        $product =  Cart::get($rowId);
        $quantity = $product->qty - 1;
        Cart::update($rowId , $quantity);


    }

    public function removeItem($rowId){

        Cart::remove($rowId);
        session()->flash('message' ,  'Item removed from cart');
        toastr()->warning('Item removed from cart ', 'Warning');
    }
}
