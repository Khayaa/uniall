<?php

namespace App\Http\Livewire\Shop;

use App\Models\Product;
use Livewire\Component;
use Cart;

class ProductdetailsComponent extends Component
{

    public $product;
    public function render()
    {
        return view('livewire.shop.productdetails-component')->extends('layouts.base')->section('content');
    }
    public function mount($slug){
        $this->product =   Product::where('slug', $slug)->first();
    }
    public function store($product_id,$product_name ,$product_price){
        $cartItem = Cart::add($product_id,$product_name , 1,$product_price );
        $cartItem->associate('Product');
        session()->flash('message' ,  'Product Added to Cart');
        toastr()->success('Product  Added to cart ', 'Success');


        return redirect()->route('cart');

    }

}
