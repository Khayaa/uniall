<?php

namespace App\Http\Livewire\Home;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Cart;

class HomeComponent extends Component
{
    public function render()
    {
        $categories =  Category::all()->take(3);
        $products = Product::all()->take(7);
        $new_products  = Product::latest()->take(5);
        return view('livewire.home.home-component', ['products' => $products , 'new_products' => $new_products])->extends('layouts.base')->section('content');
    }

    public function store($product_id,$product_name ,$product_price){
        Cart::add($product_id,$product_name , 1,$product_price )->associate('App\Models\Product');
        session()->flash('message' ,  'Product Added to Cart');
        toastr()->success('Product  Added to cart ', 'Success');


        return redirect()->route('cart');

    }
}
