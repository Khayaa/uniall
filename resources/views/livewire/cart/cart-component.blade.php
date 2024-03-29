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

            {{-- <div class="alert alert-warning d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                  </svg>
                <div>
                    <p class="fw-600 fs-20 text-primary">Hie</p>

                </div>
              </div> --}}
                @if (session('message'))
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                      </svg>


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
                                                <img src="{{ $item->model->image_path }}"
                                                    class="img-fit size-60px rounded"
                                                    alt="{{ $item->name }}">
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
                                <a role="button" href="{{ route('checkout') }}" class="btn btn-primary fw-600" >Continue to Checkout</a role="button" href="{{ route('checkout') }}">
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
