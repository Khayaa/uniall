<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        return view('livewire.blog.blog-component')->extends('layouts.base')->section('content');
    }
}
