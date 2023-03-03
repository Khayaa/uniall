<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AllCategories extends Controller
{
    //
    public function show(){
        $allcategories  = Category::all();
        return view('category.AllCategories' ,  compact('allcategories'));
    }
}
