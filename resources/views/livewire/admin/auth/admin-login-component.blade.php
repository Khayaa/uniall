<div>
    <section class="gry-bg py-5">
        <div class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto">
                        <div class="card">
                            <div class="text-center pt-4">
                                <h1 class="h4 fw-600">
                                   Admin| Login to your account.
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
                                    <form class="form-default" role="form" method="POST" wire:submit.prevent='login'>
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" placeholder="Email" name="email" wire:model='email'
                                                id="email" autocomplete="off">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" wire:model='password'
                                                class="form-control @error('password') is-invalid @enderror""
                                                placeholder="Password" name="password" id="password">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-6">
                                                <label class="aiz-checkbox">
                                                    <input type="checkbox" name="remember">
                                                    <span class="opacity-60">Remember Me</span>
                                                    <span class="aiz-square-check"></span>
                                                </label>
                                            </div>
                                            <div class="col-6 text-right">
                                                <a href="{{ route('password.request') }}"
                                                    class="text-reset opacity-60 fs-14">Forgot password?</a>
                                            </div>
                                        </div>

                                        <div class="mb-5">
                                            <button type="submit" class="btn btn-primary btn-block fw-600">Login</button>
                                        </div>
                                    </form>



                                </div>
                                <div class="text-center">
                                    <p class="text-muted mb-0">Dont have an account?</p>
                                    <a href="{{ route('admin.register') }}">Register Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
