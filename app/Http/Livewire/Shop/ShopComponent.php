<?php

namespace App\Http\Livewire\Shop;

use App\Models\Product;
use Cart;
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

    public function store($product_id,$product_name ,$product_price){
        Cart::add($product_id,$product_name , 1,$product_price )->associate('App\Models\Product');
        session()->flash('message' ,  'Product Added to Cart');
        toastr()->success('Product  Added to cart ', 'Success');


        return redirect()->route('cart');

    }
}
