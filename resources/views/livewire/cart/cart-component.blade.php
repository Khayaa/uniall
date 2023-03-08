<div>
    <section class="pt-5 mb-4">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>

    <section class="mb-4" id="cart-summary">
        <div class="container">
            @if (Cart::count() > 0)


                @if (session('message'))
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <i class="check-circle-fill"> </i>
                    <div>
                        <p class="fw-600 fs-20 text-primary">{{ session('message') }}</p>

                    </div>
                  </div>
                @endif

            <div class="row">
                <div class="col-xxl-8 col-xl-10 mx-auto">
                    <div class="shadow-sm bg-white p-3 p-lg-4 rounded text-left">
                        <div class="mb-4">
                            <div class="row gutters-5 d-none d-lg-flex border-bottom mb-3 pb-3">
                                <div class="col-md-5 fw-600">Product</div>
                                <div class="col fw-600">Price</div>
                                <div class="col fw-600">Tax</div>
                                <div class="col fw-600">Quantity</div>
                                <div class="col fw-600">Total</div>
                                <div class="col-auto fw-600">Remove</div>
                            </div>
                            @forelse(Cart::content()  as $item)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0 px-lg-3">
                                    <div class="row gutters-5">
                                        <div class="col-lg-5 d-flex">
                                            <span class="mr-2 ml-0">
                                                <img src="{{ $item->image_path }}"
                                                    class="img-fit size-60px rounded"
                                                    alt="{{ $item->image_path }}">
                                            </span>
                                            <span class="fs-14 opacity-60">{{ $item->name }}</span>
                                        </div>

                                        <div class="col-lg col-4 order-1 order-lg-0 my-3 my-lg-0">
                                            <span class="opacity-60 fs-12 d-block d-lg-none">Price</span>
                                            <span class="fw-600 fs-16">R &nbsp; {{ $item->price }}</span>
                                        </div>
                                        <div class="col-lg col-4 order-2 order-lg-0 my-3 my-lg-0">
                                            <span class="opacity-60 fs-12 d-block d-lg-none">Tax</span>
                                            <span class="fw-600 fs-16">R0.00</span>
                                        </div>

                                        <div class="col-lg col-6 order-4 order-lg-0">
                                            <div class="row no-gutters align-items-center aiz-plus-minus mr-2 ml-0">
                                                <button class="btn col-auto btn-icon btn-sm btn-circle btn-light"
                                                    type="button" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')" >
                                                    <i class="las la-minus"></i>
                                                </button>
                                                <input type="number"
                                                    class="col border-0 text-center flex-grow-1 fs-16 input-number" pattern="[0-9]*"
                                                    placeholder="1" value="{{ $item->qty }}" min="1" max="50000"
                                                   >
                                                <button class="btn col-auto btn-icon btn-sm btn-circle btn-light"
                                                    type="button"  wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">
                                                    <i class="las la-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg col-4 order-3 order-lg-0 my-3 my-lg-0">
                                            <span class="opacity-60 fs-12 d-block d-lg-none">Total</span>
                                            <span class="fw-600 fs-16 text-primary">R {{ $item->price * $item->qty}}</span>
                                        </div>
                                        <div class="col-lg-auto col-6 order-5 order-lg-0 text-right">
                                            <a href="javascript:void(0)" wire:click.prevent="removeItem('{{ $item->rowId }}')"
                                                class="btn btn-icon btn-sm btn-soft-primary btn-circle">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @empty
                            <ul class="list-group list-group-flush">
                                <div class="text-center">No Item in Cart</div>
                                 </ul>
                            @endforelse
                        </div>


                        <div class="px-3 py-2 mb-4 border-top d-flex justify-content-between">
                            <span class="opacity-60 fs-15">Subtotal</span>
                            <span class="fw-600 fs-17">R &nbsp;{{ Cart::total()}}</span>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                                <a href="{{ route('shop') }}" class="btn btn-link">
                                    <i class="las la-arrow-left"></i>
                                    Return to shop
                                </a>
                            </div>
                            <div class="col-md-6 text-center text-md-right">
                                <button class="btn btn-primary fw-600" onclick="showCheckoutModal()">Continue to Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="alert alert-warning" role="alert">
               <h4> No item in Cart , go to <a href="/shop" class="alert-link">Shop</a>. </h4>
              </div>
            @endif
        </div>
    </section>



</div>
