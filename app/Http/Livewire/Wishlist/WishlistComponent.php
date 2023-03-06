<?php

namespace App\Http\Livewire\Wishlist;

use Livewire\Component;

class WishlistComponent extends Component
{
    public function render()
    {
        return view('livewire.wishlist.wishlist-component')->extends('layouts.base')->section('content');
    }
}
