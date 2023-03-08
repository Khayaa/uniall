<?php

namespace App\Http\Livewire\Shop;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $all_products = Product::paginate(5);
        return view('livewire.shop.shop-component' , ['all_products' => $all_products])->extends('layouts.base')->section('content');
    }
}
