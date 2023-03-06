<?php

namespace App\Http\Livewire\Shop;

use App\Models\Product;
use Livewire\Component;

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
}
