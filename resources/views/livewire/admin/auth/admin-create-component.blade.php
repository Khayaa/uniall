<div>
    <section class="gry-bg py-4">
        <div class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto">
                        <div class="card">
                            <div class="text-center pt-4">
                                <h1 class="h4 fw-600">
                                   Admin | Create an account.
                                </h1>
                            </div>
                            <div class="px-4 py-3 py-lg-4">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <x-validation-errors class="mb-4" />
                                <div class="">
                                    <form id="reg-form" class="form-default" role="form"
                                        wire:submit.prevent='create' method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                wire:model='name' placeholder="Full Name" name="name">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="text" wire:model='phone_number'
                                                class="form-control @error('phone_number') is-invalid @enderror"
                                                 placeholder="Phone Number"
                                                name="phone_number">
                                            @error('phone_number')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>



                                        <div class="form-group email-form-group mb-1">
                                            <input type="email"  class="form-control @error('email') is-invalid @enderror"
                                                wire:model='email' placeholder="Email" name="email"
                                                autocomplete="off">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>



                                        <div class="form-group">
                                            <input type="password" wire:model='password'
                                                class="form-control @error('password') is-invalid

                                            @enderror"
                                                placeholder="Password" name="password">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" wire:model='password_confirmation'
                                                class="form-control @error('password_confirmation') is-invalid
                                            @enderror"
                                                placeholder="Confirm Password" name="password_confirmation">
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>



                                        <div class="mb-3">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="terms" required>
                                                <span class="opacity-60">By signing up you agree to our terms and
                                                    conditions.</span>
                                                <span class="aiz-square-check"></span>
                                            </label>

                                        </div>

                                        <div class="mb-5">
                                            <button type="submit" class="btn btn-primary btn-block fw-600">Create
                                                Account</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="text-center">
                                    <p class="text-muted mb-0">Already have an account?</p>
                                    <a href="{{ route('admin.login') }}">Log In</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
