<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function show(){
        $categories =  Category::all()->take(3);
        $products = Product::all()->take(10);
        return view('Home-controller' , compact(['categories' , 'products']));
    }


}
