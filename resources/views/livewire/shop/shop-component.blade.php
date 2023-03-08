<div>
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

                <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">All Products</span>
                    </h3>
                    <div class="aiz-count-down ml-auto ml-lg-3 align-items-center" data-date="2025/01/01 00:00:00"></div>
                    <a href="/shop" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md w-100 w-md-auto">View More</a>
                </div>
                @foreach ($all_products as $product)
                    <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                        data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>

                        <div class="carousel-box">
                            <div
                                class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;20%</span></span>
                                <div class="position-relative">
                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}" class="d-block">
                                        <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="{{ $product->image_path }}" data-src="{{ $product->image_path }}"
                                            alt="{{ $product->name }}">
                                    </a>
                                    <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8"
                                        style="background-color: #455a64">
                                        Wholesale
                                    </span>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(2)" data-toggle="tooltip"
                                            data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(2)" data-toggle="tooltip"
                                            data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(2)"
                                            data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <del class="fw-600 opacity-50 mr-1">R150.000</del>
                                        <span class="fw-700 text-primary">R {{ $product->price }}</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star active'></i><i class='las la-star active'></i><i
                                            class='las la-star active'></i><i class='las la-star active'></i><i
                                            class='las la-star active'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="#" class="d-block text-reset">{{ $product->name }}</a>
                                    </h3>

                                </div>
                            </div>
                        </div>


                    </div>
                @endforeach

            </div>
            {{ $all_products->links() }}
        </div>
    </section>
</div>
