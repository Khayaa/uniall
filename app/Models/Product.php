<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'description','slug' , 'skhu', 'status' , 'price' , 'quantity' , 'image_path' , 'category_id'
    ];
}
