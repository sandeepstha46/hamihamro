@include('header')
<!-- ...:::: Start Customer Login Section :::... -->
<div class="customer_login">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form register" data-aos="fade-up" data-aos-delay="200">
                    <h3></h3>
                    <form action="#">
                        <div class="default-form-box mb-20">
                            <label></label>
                        </div>
                        <div class="default-form-box mb-20">
                            <label></label>
                        </div>
                        <img class="img-fluid" src="assets/images/register/register-side.png" alt="" />
                    </form>
                </div>
            </div>
            <!--login area start-->

            <!--register area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form register" data-aos="fade-up" data-aos-delay="200">
                    <h3>Register</h3>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="default-form-box mb-20">
                            <label>Username <span>*</span></label>
                            <input type="text" name="username" required>
                        </div>
                        <div class="default-form-box mb-20">
                            <label>Email address <span>*</span></label>
                            <input type="email" name="email" required>
                        </div>

                        <!-- Password -->
                        <div class="default-form-box mb-20">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="default-form-box mb-20">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required />
                        </div>

                        <div class="default-form-box mb-20">
                            <x-label for="mobile" :value="__('Mobile')" />

                            <x-input id="password" class="block mt-1 w-full" type="number" name="mobile" required
                                autocomplete="new-mobile" />
                        </div>

                        <div class="default-form-box mb-20">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                        <div class="login_submit">
                            <button type="submit">Register</button>
                            <p style="font-size: 11px; margin-top: 3px">With clicking Register, you agree to all our
                                terms & conditions.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Customer Login Section :::... -->
@include('footer')
