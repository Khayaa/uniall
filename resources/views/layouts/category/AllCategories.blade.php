@extends('layouts.base')
@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">All categories</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="https://uniall.co.za">Home</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="https://uniall.co.za/categories">"All categories"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="container">
                    <div class="mb-3 bg-white shadow-sm rounded">
                <div class="p-3 border-bottom fs-16 fw-600">
                    <a href="https://uniall.co.za/category/Demo-category-1" class="text-reset">Demo category 1</a>
                </div>
                <div class="p-3 p-lg-4">
                    <div class="row">
                                            </div>
                </div>
            </div>
                    <div class="mb-3 bg-white shadow-sm rounded">
                <div class="p-3 border-bottom fs-16 fw-600">
                    <a href="https://uniall.co.za/category/Demo-category-2" class="text-reset">Demo category 2</a>
                </div>
                <div class="p-3 p-lg-4">
                    <div class="row">
                                            </div>
                </div>
            </div>
                    <div class="mb-3 bg-white shadow-sm rounded">
                <div class="p-3 border-bottom fs-16 fw-600">
                    <a href="https://uniall.co.za/category/Demo-category-3" class="text-reset">Demo category 3</a>
                </div>
                <div class="p-3 p-lg-4">
                    <div class="row">
                                            </div>
                </div>
            </div>
            </div>
</section>

@endsection