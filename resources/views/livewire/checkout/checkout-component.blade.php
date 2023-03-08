<div>
    <section class="mb-4">
        <div class="container text-left">
            @if (Cart::count() > 0)


            <div class="row">
                <div class="col-lg-8">
                    <form wire:submit.prevent='submit' class="form-default" role="form" method="POST">



                        <div class="card rounded border-0 shadow-sm">
                            <div class="card-header p-3">
                                <h3 class="fs-16 fw-600 mb-0">
                                    Personal Details
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group px-3 pt-3">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            wire:model='name' placeholder="Full Name" name="name">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group px-3 pt-3">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            wire:model='email' placeholder="Email" name="email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group px-3 pt-3">
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    wire:model='phone_number' placeholder="Phone Number" name="phone_number">
                                @error('phone_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="row">
                                <div class="col">
                                    <div class="form-group px-3 pt-3">
                                        <input type="text"
                                            class="form-control @error('password') is-invalid @enderror"
                                            wire:model='password' placeholder="Password" name="password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group px-3 pt-3">
                                        <input type="text"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            wire:model='password_confirmation' placeholder="Password Confirmation"
                                            name="name">
                                        @error('password_confirmation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="card-header p-3">
                                <h3 class="fs-16 fw-600 mb-0">
                                    Address
                                </h3>
                            </div>
                            <div class="form-group px-3 pt-3">
                                <textarea name="address" wire:model='address' rows="5" class="form-control @error('address') is-invalid @enderror"
                                    placeholder="Type your Address"></textarea>
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group px-3 pt-3">
                                        <input type="text" class="form-control @error('city') is-invalid @enderror"
                                            wire:model='city' placeholder="City" name="city">
                                        @error('city')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group px-3 pt-3">
                                        <input type="text" class="form-control @error('zip') is-invalid @enderror"
                                            wire:model='zip' placeholder="Zip code" name="name">
                                        @error('zip')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="card-header p-3">
                                <h3 class="fs-16 fw-600 mb-0">
                                    Any additional info?
                                </h3>
                            </div>
                            <div class="form-group px-3 pt-3">
                                <textarea name="additional_info" wire:model='additional_info' rows="5"
                                    class="form-control @error('additional_info') is-invalid @enderror" placeholder="Type your text"></textarea>
                                @error('additional_info')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="card-header p-3">
                                <h3 class="fs-16 fw-600 mb-0">
                                    Select a payment option
                                </h3>
                            </div>
                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col-xxl-8 col-xl-10 mx-auto">
                                        <div class="row gutters-10">


                                            <div class="col-6 col-md-4">
                                                <label class="aiz-megabox d-block mb-3">
                                                    <input value="paystack" class="online_payment" type="radio"
                                                        name="payment_option" checked="">
                                                    <span class="d-block aiz-megabox-elem p-3">
                                                        <img src="{{ asset('assets/img/cards/paystack.png') }}"
                                                            class="img-fluid mb-2">
                                                        <span class="d-block text-center">
                                                            <span class="d-block fw-600 fs-15">Paystack</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <label class="aiz-megabox d-block mb-3">
                                                    <input value="payfast" class="online_payment" type="radio"
                                                        name="payment_option" checked="">
                                                    <span class="d-block aiz-megabox-elem p-3">
                                                        <img src="{{ asset('assets/img/cards/payfast.png') }}"
                                                            class="img-fluid mb-2">
                                                        <span class="d-block text-center">
                                                            <span class="d-block fw-600 fs-15">payfast</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>



                                        </div>
                                    </div>
                                </div>

                                <div class="d-none mb-3 rounded border bg-white p-3 text-left">
                                    <div id="manual_payment_description">

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Transaction ID <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control mb-3" name="trx_id"
                                                id="trx_id" placeholder="Transaction ID" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Photo</label>
                                        <div class="col-md-9">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        Browse</div>
                                                </div>
                                                <div class="form-control file-amount">Choose image
                                                </div>
                                                <input type="hidden" name="photo" class="selected-files">
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="pt-3">
                            <label class="aiz-checkbox">
                                <input type="checkbox" required="" id="agree_checkbox">
                                <span class="aiz-square-check"></span>
                                <span>I agree to the</span>
                            </label>
                            <a href="/terms">terms and conditions</a>,
                            <a href="/return-policy">Return Policy</a> &amp;
                            <a href="/privacy-policy">Privacy Policy</a>
                        </div>

                        <div class="row align-items-center pt-3">
                            <div class="col-6">
                                <a href="/shop" class="link link--style-3">
                                    <i class="las la-arrow-left"></i>
                                    Return to shop
                                </a>
                            </div>
                            <div class="col-6 text-right">
                                <button type="submit"
                                    class="btn btn-primary fw-600">Complete Order</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4 mt-lg-0 mt-4" id="cart_summary">
                    <div class="card rounded border-0 shadow-sm">
                        <div class="card-header">
                            <h3 class="fs-16 fw-600 mb-0">Summary</h3>
                            <div class="text-right">
                                <span class="badge badge-inline badge-primary">

                                   {{ Cart::count() }} Item/s
                                </span>




                            </div>
                        </div>


                        <div class="card-body">


                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total text-right">Total</th>
                                    </tr>
                                </thead>
                                @foreach (Cart::content() as $item)
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            {{ $item->name }}
                                            <strong class="product-quantity">
                                                × {{ $item->qty }}
                                            </strong>
                                        </td>
                                        <td class="product-total text-right">
                                            <span class="pl-4 pr-0">R  {{ $item->price * $item->qty }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            <input type="hidden" id="sub_total" value="40">
                            <table class="table">

                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td class="text-right">
                                            <span class="fw-600">R {{ Cart::total() }}</span>
                                        </td>
                                    </tr>

                                    <tr class="cart-shipping">
                                        <th>Tax</th>
                                        <td class="text-right">
                                            <span class="font-italic">R 0.000</span>
                                        </td>
                                    </tr>

                                    <tr class="cart-shipping">
                                        <th>Total Shipping</th>
                                        <td class="text-right">
                                            <span class="font-italic">R 0.000</span>
                                        </td>
                                    </tr>




                                    <tr class="cart-total">
                                        <th><span class="strong-600">Total</span></th>
                                        <td class="text-right">
                                            <strong><span>R {{ Cart::total() }}</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>


                            {{-- <div class="mt-3">
                                <form class="" id="apply-coupon-form" enctype="multipart/form-data">
                                    <input type="hidden" name="_token"
                                        value="eWzTATmpBJS3koPlWM8bpldWCcNyfJWymKAz135g"> <input type="hidden"
                                        name="owner_id" value="20">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="code"
                                            onkeydown="return event.key != 'Enter';"
                                            placeholder="Have coupon code? Enter here" required="">
                                        <div class="input-group-append">
                                            <button type="button" id="coupon-apply"
                                                class="btn btn-primary">Apply</button>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}

                        </div>)


                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
</div>
