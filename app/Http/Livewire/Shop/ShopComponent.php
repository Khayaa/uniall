<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;

class ShopComponent extends Component
{
    public function render()
    {
        return view('livewire.shop.shop-component')->extends('layouts.base')->section('content');
    }
}
