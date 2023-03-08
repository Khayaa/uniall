<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class HomeController extends Controller
{
    //

    public function show(){
        $categories =  Category::all()->take(3);
        $products = Product::all()->take(7);
        $new_products  = Product::latest()->take(5);
        return view('Home-controller' , compact(['categories' , 'products']));
    }

    


}
