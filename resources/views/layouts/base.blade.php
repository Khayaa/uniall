<!DOCTYPE html>
<html lang="en">

<head>

    {{-- <meta name="csrf-token" content="hMjpOODuJkEhxhySih23tpD5NvKdlpwqTqbHRiet">
    <meta name="app-url" content="//demo.activeitzone.com/ecommerce/">
    <meta name="file-base-url" content="//demo.activeitzone.com/ecommerce/public/"> --}}

    <title>UniAll</title>

    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Demo of Active eCommerce CMS" />
    <meta name="keywords" content="">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Active eCommerce CMS">
    <meta itemprop="description" content="Demo of Active eCommerce CMS">
    <meta itemprop="image" content="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Active eCommerce CMS">
    <meta name="twitter:description" content="Demo of Active eCommerce CMS">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Active eCommerce CMS" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://demo.activeitzone.com/ecommerce" />
    <meta property="og:image" content="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" />
    <meta property="og:description" content="Demo of Active eCommerce CMS" />
    <meta property="og:site_name" content="Active eCommerce CMS" />
    <meta property="fb:app_id" content=""> --}}

    <!-- Favicon -->
    <link rel="icon"
        href="https://demo.activeitzone.com/ecommerce/public/uploads/all/4xnLnzEeu3dFKDGSBMlvLXPLGXFdHEkvqBSZREmO.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->





    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aiz-core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aiz-seller.css') }}">
    @livewireStyles()

    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Nothing selected',
            nothing_found: 'Nothing found',
            choose_file: 'Choose file',
            file_selected: 'File selected',
            files_selected: 'Files selected',
            add_more_files: 'Add more files',
            adding_more_files: 'Adding more files',
            drop_files_here_paste_or: 'Drop files here, paste or',
            browse: 'Browse',
            upload_complete: 'Upload complete',
            upload_paused: 'Upload paused',
            resume_upload: 'Resume upload',
            pause_upload: 'Pause upload',
            retry_upload: 'Retry upload',
            cancel_upload: 'Cancel upload',
            uploading: 'Uploading',
            processing: 'Processing',
            complete: 'Complete',
            file: 'File',
            files: 'Files',
        }
    </script>

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
        }

        :root {
            --primary: #e62e04;
            --hov-primary: #e62e04;
            --soft-primary: rgba(230, 46, 4, 0.15);
        }

        #map {
            width: 100%;
            height: 250px;
        }

        #edit_map {
            width: 100%;
            height: 250px;
        }

        .pac-container {
            z-index: 100000;
        }
    </style>




</head>

<body>
    <!-- aiz-main-wrapper -->
    <div class="aiz-main-wrapper d-flex flex-column">

        <!-- Header -->
        {{-- <div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner"
            data-value="removed">
            <a href="#" class="d-block text-reset">
                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/9iuA7035EikPi8gg5FSLyg8kcUIAzHs2pLAfuiSF.png"
                    class="w-100 mw-100 h-50px h-lg-auto img-fit">
            </a>
            <button class="btn text-white absolute-top-right set-session" data-key="top-banner" data-value="removed"
                data-toggle="remove-parent" data-parent=".top-banner">
                <i class="la la-close la-2x"></i>
            </button>
        </div> --}}
        <!-- Top Bar -->
        <div class="top-navbar bg-white border-bottom border-soft-secondary z-1035 h-35px h-sm-auto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col">
                        <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                            <li class="list-inline-item dropdown mr-3" id="lang-change">
                                <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2"
                                    data-toggle="dropdown" data-display="static">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                        data-src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/en.png"
                                        class="mr-2 lazyload" alt="English" height="11">
                                    <span class="opacity-60">English</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li>
                                        <a href="javascript:void(0)" data-flag="en" class="dropdown-item ">
                                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                                data-src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/en.png"
                                                class="mr-1 lazyload" alt="English" height="11">
                                            <span class="language">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="bd" class="dropdown-item ">
                                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                                data-src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/bd.png"
                                                class="mr-1 lazyload" alt="Bangla" height="11">
                                            <span class="language">Bangla</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="sa" class="dropdown-item ">
                                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                                data-src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/sa.png"
                                                class="mr-1 lazyload" alt="Arabic" height="11">
                                            <span class="language">Arabic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="fr" class="dropdown-item ">
                                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                                data-src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/fr.png"
                                                class="mr-1 lazyload" alt="French" height="11">
                                            <span class="language">French</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="list-inline-item dropdown ml-auto ml-lg-0 mr-0" id="currency-change">
                                <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2 opacity-60"
                                    data-toggle="dropdown" data-display="static">
                                    U.S. Dollar $
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    <li>
                                        <a class="dropdown-item  active " href="javascript:void(0)"
                                            data-currency="USD">U.S. Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="AUD">Australian Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="BRL">Brazilian Real (R$)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="CAD">Canadian
                                            Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="CZK">Czech
                                            Koruna (Kč)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="DKK">Danish
                                            Krone (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="EUR">Euro
                                            (€)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="HKD">Hong
                                            Kong Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="HUF">Hungarian Forint (Ft)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="ILS">Israeli New Sheqel ()</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="JPY">Japanese Yen (¥)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="MYR">Malaysian Ringgit (RM)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="MXN">Mexican Peso ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="NOK">Norwegian Krone (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="NZD">New
                                            Zealand Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="PHP">Philippine Peso (₱)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="PLN">Polish Zloty (zł)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="GBP">Pound
                                            Sterling ()</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="RUB">Russian Ruble (рб)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="SGD">Singapore Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="SEK">Swedish Krona (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="CHF">Swiss
                                            Franc (CHF)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="THB">Thai
                                            Baht (฿)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="BDT">Taka
                                            ()</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="Rupee">Indian Rupee (Rs)</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="col-5 text-right d-none d-lg-block">
                        <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="tel:+" class="text-reset d-inline-block opacity-60 py-2">
                                    <i class="la la-phone"></i>
                                    <span>Help line</span>
                                    <span>-</span>
                                </a>
                            </li>
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="{{ route('login') }}"
                                    class="text-reset d-inline-block opacity-60 py-2">Login</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('register') }}"
                                    class="text-reset d-inline-block opacity-60 py-2">Registration</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Top Bar -->
        <header class=" sticky-top  z-1020 bg-white border-bottom shadow-sm">
            <div class="position-relative logo-bar-area z-1">
                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                            <a class="d-block py-20px mr-3 ml-0" href="https://demo.activeitzone.com/ecommerce">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/ikb1MZlSZBdn6Vn0o8JDFrWuVEeuGMBHV6igl9fc.png"
                                    alt="Active eCommerce CMS" class="mw-100 h-30px h-md-40px" height="40">
                            </a>

                        </div>
                        <div class="d-lg-none ml-auto mr-0">
                            <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle"
                                data-target=".front-header-search">
                                <i class="las la-search la-flip-horizontal la-2x"></i>
                            </a>
                        </div>

                        <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                            <div class="position-relative flex-grow-1">
                                <form action="https://demo.activeitzone.com/ecommerce/search" method="GET"
                                    class="stop-propagation">
                                    <div class="d-flex position-relative align-items-center">
                                        <div class="d-lg-none" data-toggle="class-toggle"
                                            data-target=".front-header-search">
                                            <button class="btn px-2" type="button"><i
                                                    class="la la-2x la-long-arrow-left"></i></button>
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="border-0 border-lg form-control"
                                                id="search" name="keyword" placeholder="I am shopping for..."
                                                autocomplete="off">
                                            <div class="input-group-append d-none d-lg-block">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="la la-search la-flip-horizontal fs-18"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100"
                                    style="min-height: 200px">
                                    <div class="search-preloader absolute-top-center">
                                        <div class="dot-loader">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="search-nothing d-none p-3 text-center fs-16">

                                    </div>
                                    <div id="search-content" class="text-left">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-none d-lg-none ml-3 mr-0">
                            <div class="nav-search-box">
                                <a href="#" class="nav-box-link">
                                    <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                </a>
                            </div>
                        </div>

                        {{-- <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="compare">
                                <a href="https://demo.activeitzone.com/ecommerce/compare"
                                    class="d-flex align-items-center text-reset">
                                    <i class="la la-refresh la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill">0</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">Compare</span>
                                    </span>
                                </a>
                            </div>
                        </div> --}}

                        <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="wishlist">
                                <a href="{{ route('wishlist') }}" class="d-flex align-items-center text-reset">
                                    <i class="la la-heart-o la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill">0</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">Wishlist</span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdown">
                            <div class="nav-cart-box dropdown h-100" id="cart_items">
                                <a href="{{ route('cart') }}" class="d-flex align-items-center text-reset h-100">
                                    <i class="la la-shopping-cart la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill cart-count">
                                            @if (Cart::count() > 0)
                                                {{ Cart::count() }}
                                            @else
                                                0
                                            @endif
                                        </span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">Cart</span>
                                    </span>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="bg-white border-top border-gray-200 py-1">
                <div class="container">
                    <ul class="list-inline mb-0 pl-0 mobile-hor-swipe text-center">
                        <li class="list-inline-item mr-0">
                            <a href="/"
                                class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                Home
                            </a>
                        </li>

                        <li class="list-inline-item mr-0">
                            <a href="/blog"
                                class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                Blogs
                            </a>
                        </li>

                        <li class="list-inline-item mr-0">
                            <a href="/categories"
                                class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                All Categories
                            </a>
                        </li>

                        <li class="list-inline-item mr-0">
                            <a href="/shop"
                                class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                Shop
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </header>

        <div class="modal fade" id="order_details" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div id="order-details-modal-body">

                    </div>
                </div>
            </div>
        </div>



        @yield('content')
        <section class="bg-white border-top mt-auto">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left text-center p-4 d-block"
                            href="https://demo.activeitzone.com/ecommerce/terms">
                            <i class="la la-file-text la-3x text-primary mb-2"></i>
                            <h4 class="h6">Terms &amp; conditions</h4>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left text-center p-4 d-block"
                            href="https://demo.activeitzone.com/ecommerce/return-policy">
                            <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                            <h4 class="h6">Return Policy</h4>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left text-center p-4 d-block"
                            href="https://demo.activeitzone.com/ecommerce/support-policy">
                            <i class="la la-support la-3x text-primary mb-2"></i>
                            <h4 class="h6">Support Policy</h4>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left border-right text-center p-4 d-block"
                            href="https://demo.activeitzone.com/ecommerce/privacy-policy">
                            <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                            <h4 class="h6">Privacy Policy</h4>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-dark py-5 text-light footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4 text-center text-md-left">
                        <div class="mt-4">
                            <a href="https://demo.activeitzone.com/ecommerce" class="d-block">
                                <img class="lazyload"
                                    src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder-rect.jpg"
                                    data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/ikb1MZlSZBdn6Vn0o8JDFrWuVEeuGMBHV6igl9fc.png"
                                    alt="Active eCommerce CMS" height="44">
                            </a>
                            <div class="my-3">
                                <span style="color: rgb(242, 243, 248); font-family: "Open Sans", sans-serif;
                                    background-color: rgb(17, 23, 35);">Complete system for your eCommerce
                                    business</span>
                            </div>
                            <div class="d-inline-block d-md-block mb-4">
                                <form class="form-inline" method="POST" action="/">
                                    <input type="hidden" name="_token"
                                        value="hMjpOODuJkEhxhySih23tpD5NvKdlpwqTqbHRiet">
                                    <div class="form-group mb-0">
                                        <input type="email" class="form-control" placeholder="Your Email Address"
                                            name="email" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                            <div class="w-300px mw-100 mx-auto mx-md-0">
                                <a href="#" target="_blank" class="d-inline-block mr-3 ml-0">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/play.png"
                                        class="mx-100 h-40px">
                                </a>
                                <a href="#" target="_blank" class="d-inline-block">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/app.png"
                                        class="mx-100 h-40px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                Contact Info
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <span class="d-block opacity-30">Address:</span>
                                    <span class="d-block opacity-70">Demo</span>
                                </li>
                                <li class="mb-2">
                                    <span class="d-block opacity-30">Phone:</span>
                                    <span class="d-block opacity-70">123456789</span>
                                </li>
                                <li class="mb-2">
                                    <span class="d-block opacity-30">Email:</span>
                                    <span class="d-block opacity-70">
                                        <a href="/cdn-cgi/l/email-protection#89edece4e6a7ecf1e8e4f9e5ecc9eee4e8e0e5a7eae6e4"
                                            class="text-reset"><span class="__cf_email__"
                                                data-cfemail="4327262e2c6d263b222e332f2603242e222a2f6d202c2e">[email&#160;protected]</span></a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                Quick Links
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="sellerpolicy" class="opacity-50 hov-opacity-100 text-reset">
                                        Support Policy Page
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="returnpolicy" class="opacity-50 hov-opacity-100 text-reset">
                                        Return Policy Page
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="aboutus" class="opacity-50 hov-opacity-100 text-reset">
                                        About Us
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="privacypolicy" class="opacity-50 hov-opacity-100 text-reset">
                                        Privacy Policy Page
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="sellerpolicy" class="opacity-50 hov-opacity-100 text-reset">
                                        Seller Policy
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="terms" class="opacity-50 hov-opacity-100 text-reset">
                                        Term Conditions Page
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-2">
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                My Account
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="/login">
                                        Login
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="/">
                                        Order History
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="/wishlist">
                                        My Wishlist
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="/">
                                        Track Order
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-light" href="/">Be an affiliate
                                        partner</a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                Be a Seller
                            </h4>
                            <a href="/" class="btn btn-primary btn-sm shadow-md">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        <footer class="pt-3 pb-7 pb-xl-3 bg-black text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="text-center text-md-left" current-verison="6.5.0">
                            © Active eCommerce CMS 2021
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-inline my-3 my-md-0 social colored text-center">
                            <li class="list-inline-item">
                                <a href="https://facebook.com/" target="_blank" class="facebook"><i
                                        class="lab la-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/" target="_blank" class="twitter"><i
                                        class="lab la-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/" target="_blank" class="instagram"><i
                                        class="lab la-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://youtube.com/" target="_blank" class="youtube"><i
                                        class="lab la-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://linkedin.com/" target="_blank" class="linkedin"><i
                                        class="lab la-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/NankP5emHOKcdCWqX6Bks1Qa63iDgoLA6WPGn7oe.png"
                                        height="30" class="mw-100 h-auto" style="max-height: 30px">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top"
            style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
            <div class="row align-items-center gutters-5">
                <div class="col">
                    <a href="/" class="text-reset d-block text-center pb-2 pt-3">
                        <i class="las la-home fs-20 opacity-60 opacity-100 text-primary"></i>
                        <span class="d-block fs-10 fw-600 opacity-60 opacity-100 fw-600">Home</span>
                    </a>
                </div>
                <div class="col">
                    <a href="/shop" class="text-reset d-block text-center pb-2 pt-3">
                        <i class="las la-list-ul fs-20 opacity-60 "></i>
                        <span class="d-block fs-10 fw-600 opacity-60 ">Shop</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{ route('cart') }}" class="text-reset d-block text-center pb-2 pt-3">
                        <span
                            class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px"
                            style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                            <i class="las la-shopping-bag la-2x text-white"></i>
                        </span>
                        <span class="d-block mt-1 fs-10 fw-600 opacity-60 ">
                            Cart
                            (<span class="cart-count">
                                @if (Cart::count() > 0)
                                    {{ Cart::count() }}
                                @else
                                    0
                                @endif
                            </span>)
                        </span>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-inline-block position-relative px-2">
                            <i class="las la-bell fs-20 opacity-60 "></i>
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60 ">Notifications</span>
                    </a>
                </div>
                <div class="col">
                    <a href="/login" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-block mx-auto">
                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png"
                                class="rounded-circle size-20px">
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">Account</span>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="aiz-cookie-alert shadow-xl">
        <div class="p-3 bg-dark rounded">
            <div class="text-white mb-3">
                <p>We use cookie for better user experience, check our policy <a href="">here</a>&nbsp;</p>
            </div>
            <button class="btn btn-primary aiz-cookie-accept">
                Ok. I Understood
            </button>
        </div>
    </div>

    <div class="modal website-popup removable-session d-none" data-key="website-popup" data-value="removed">
        <div class="absolute-full bg-black opacity-60"></div>
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
            <div class="modal-content position-relative border-0 rounded-0">
                <div class="aiz-editor-data">
                    <p><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/dwaK3um8tkVgEsgmZN1peQb844tFRAIQ1wAS8e3z.png"
                            style="width: 100%;"></p>
                    <p style="text-align: center; "><br></p>
                    <h2 style="text-align: center; "><b>Subscribe to Our Newsletter</b></h2>
                    <p style="text-align: center;">Subscribe our newsletter for coupon, offer and exciting promotional
                        discount..</p>
                </div>
                <div class="pb-5 pt-4 px-5">
                    <form class="" method="POST" action="https://demo.activeitzone.com/ecommerce/subscribers">
                        <input type="hidden" name="_token" value="hMjpOODuJkEhxhySih23tpD5NvKdlpwqTqbHRiet">
                        <div class="form-group mb-0">
                            <input type="email" class="form-control" placeholder="Your Email Address"
                                name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3">
                            Subscribe Now
                        </button>
                    </form>
                </div>
                <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session"
                    data-key="website-popup" data-value="removed" data-toggle="remove-parent"
                    data-parent=".website-popup">
                    <i class="la la-close fs-20"></i>
                </button>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        function confirm_modal(delete_url) {
            jQuery('#confirm-delete').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>

                <div class="modal-body">
                    <p>Delete confirmation message</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a id="delete_link" class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function account_delete_confirm_modal(delete_url) {
            jQuery('#account_delete_confirm').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('account_delete_link').setAttribute('href', delete_url);
        }
    </script>

    <div class="modal fade" id="account_delete_confirm" tabindex="-1" role="dialog"
        aria-labelledby="account_delete_confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header d-block py-4">
                    <div class="d-flex justify-content-center">
                        <span class="avatar avatar-md mb-2 mt-2">
                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png"
                                class="image rounded-circle m-auto"
                                onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png';">
                        </span>
                    </div>
                    <h4 class="modal-title text-center fw-700" id="account_delete_confirmModalLabel"
                        style="color: #ff9819;">Delete Your Account</h4>
                    <p class="fs-16 fw-600 text-center" style="color: #8d8d8d;">Warning: You cannot undo this action
                    </p>
                </div>

                <div class="modal-body pt-3 pb-5 px-xl-5">
                    <p class="text-danger mt-3"><i><strong>Note:&nbsp;Don&#039;t Click to any button or don&#039;t do
                                any action during account Deletion, it may takes some times.</strong></i></p>
                    <p class="fs-14 fw-700" style="color: #8d8d8d;">Deleting Account Means:</p>
                    <div class="row bg-soft-warning py-2 mb-2 ml-0 mr-0 border-left border-width-2 border-danger">
                        <div class="col-1">
                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/warning.png"
                                class="h-20px">
                        </div>
                        <div class="col">
                            <p class="fw-600 mb-0">If you create any classified ptoducts, after deleting your account,
                                those products will no longer in our system</p>
                        </div>
                    </div>
                    <div class="row bg-soft-warning py-3 ml-0 mr-0 border-left border-width-2 border-danger">
                        <div class="col-1">
                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/warning.png"
                                class="h-20px">
                        </div>
                        <div class="col">
                            <p class="fw-600 mb-0">After deleting your account, wallet balance no longer in our system
                            </p>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a id="account_delete_link" class="btn btn-danger btn-rounded btn-ok">Delete Account</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size"
            role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true" class="la-2x">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <script src="{{ asset('assets/js/aiz-core.js') }}"></script>
    <script src="{{ asset('assets/js/vendors.js') }}"></script>
    <script src="{{ asset('assets/js/intlTelutils.js') }}"></script>




    {{-- <script type="text/javascript">
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v3.3'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script> --}}
    <div id="fb-root"></div>
    <!-- Your customer chat code -->
    {{-- <div class="fb-customerchat" attribution=setup_tool page_id=""> --}}
    </div>

    <script></script>

    <script>
        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function() {
                    if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                        $.post('https://demo.activeitzone.com/ecommerce/category/nav-element-list', {
                            _token: AIZ.data.csrf,
                            id: $(el).data('id')
                        }, function(data) {
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });
            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('https://demo.activeitzone.com/ecommerce/language', {
                            _token: AIZ.data.csrf,
                            locale: locale
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('https://demo.activeitzone.com/ecommerce/currency', {
                            _token: AIZ.data.csrf,
                            currency_code: currency_code
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function() {
            search();
        });

        $('#search').on('focus', function() {
            search();
        });

        function search() {
            var searchKey = $('#search').val();
            if (searchKey.length > 0) {
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('https://demo.activeitzone.com/ecommerce/ajax-search', {
                    _token: AIZ.data.csrf,
                    search: searchKey
                }, function(data) {
                    if (data == '0') {
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html(
                            'Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                        $('.search-preloader').addClass('d-none');

                    } else {
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            } else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        function updateNavCart(view, count) {
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        function removeFromCart(key) {
            $.post('https://demo.activeitzone.com/ecommerce/cart/removeFromCart', {
                _token: AIZ.data.csrf,
                id: key
            }, function(data) {
                updateNavCart(data.nav_cart_view, data.cart_count);
                $('#cart-summary').html(data.cart_view);
                AIZ.plugins.notify('success', "Item has been removed from cart");
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
            });
        }

        function addToCompare(id) {
            $.post('https://demo.activeitzone.com/ecommerce/compare/addToCompare', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('#compare').html(data);
                AIZ.plugins.notify('success', "Item has been added to compare list");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
            });
        }

        function addToWishList(id) {
            AIZ.plugins.notify('warning', "Please login first");
        }

        function showAddToCartModal(id) {
            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('https://demo.activeitzone.com/ecommerce/cart/show-cart-modal', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                AIZ.plugins.slickCarousel();
                AIZ.plugins.zoom();
                AIZ.extra.plusMinus();
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function() {
            getVariantPrice();
        });

        function getVariantPrice() {
            if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
                $.ajax({
                    type: "POST",
                    url: 'https://demo.activeitzone.com/ecommerce/product/variant_price',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {

                        $('.product-gallery-thumb .carousel-box').each(function(i) {
                            if ($(this).data('variation') && data.variation == $(this).data(
                                    'variation')) {
                                $('.product-gallery-thumb').slick('slickGoTo', i);
                            }
                        })

                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('#available-quantity').html(data.quantity);
                        $('.input-number').prop('max', data.max_limit);
                        if (parseInt(data.in_stock) == 0 && data.digital == 0) {
                            $('.buy-now').addClass('d-none');
                            $('.add-to-cart').addClass('d-none');
                            $('.out-of-stock').removeClass('d-none');
                        } else {
                            $('.buy-now').removeClass('d-none');
                            $('.add-to-cart').removeClass('d-none');
                            $('.out-of-stock').addClass('d-none');
                        }

                        AIZ.extra.plusMinus();
                    }
                });
            }
        }

        function checkAddToCartValidity() {
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                count++;
            });

            if ($('#option-choice-form input:radio:checked').length == count) {
                return true;
            }

            return false;
        }

        function addToCart() {

            if (checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: 'https://demo.activeitzone.com/ecommerce/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {

                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        $('#modal-size').removeClass('modal-lg');
                        $('#addToCart-modal-body').html(data.modal_view);
                        AIZ.extra.plusMinus();
                        AIZ.plugins.slickCarousel();
                        updateNavCart(data.nav_cart_view, data.cart_count);
                    }
                });
            } else {
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }

        function buyNow() {

            if (checkAddToCartValidity()) {
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: 'https://demo.activeitzone.com/ecommerce/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        if (data.status == 1) {

                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view, data.cart_count);

                            window.location.replace("https://demo.activeitzone.com/ecommerce/cart");
                        } else {
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                        }
                    }
                });
            } else {
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }
    </script>

    <script>
        $(document).ready(function() {

            $('.hs').slick({
        setting-name: setting-value
      });


        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    @livewireScripts()
</body>

</html>
