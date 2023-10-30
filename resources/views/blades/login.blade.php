@extends('welcome')

@push('title', 'Login')

@section('body')
    <section class="container pt-5 pb-5">
        <!-- Section: Design Block -->
        <section class="">
            <!-- Jumbotron -->
            <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
                <div class="container">
                    <div class="row gx-lg-5 align-items-center">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <h1 class="my-5 display-3 fw-bold ls-tight">
                                <b style="color: hsl(217, 16%, 68%);">api</b><b class="text-primary">Zonex</b> <br />
                                <span class="text-dark">for your business</span>
                            </h1>
                            <p style="color: hsl(217, 10%, 50.8%)">
                                Take your business to next level with <b style="color: hsl(217, 16%, 68%);">api</b><b
                                    class="text-primary">Zonex</b>. Now no more tension for locators, <b>just hit and
                                    get.</b>
                                Once generated api key use that for One year for <b>free free free!</b>
                                After completing one year you can make your own choise to continue, or cancel anytime.
                            </p>
                        </div>

                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="card">
                                <div class="card-body py-5 px-md-5">
                                    <form action="{{route('loginme')}}" method="POST">
                                      @csrf
                                        <!-- Email input -->
                                        <div class="form-outline mt-4">
                                            <input type="email" id="form3Example3" name="email" class="form-control p-3" value="{{old('email')}}"/>
                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>
                                        <div class="error text-danger">
                                          @error('email')
                                              {{$message}}
                                          @enderror
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mt-4">
                                            <input type="password" id="form3Example4" name="password" class="form-control p-3"/>
                                            <label class="form-label" for="form3Example4">Password</label>
                                        </div>
                                        <div class="error mt-0 text-danger">
                                          @error('password')
                                              {{$message}}
                                          @enderror
                                        </div>

                                        <!-- Checkbox -->
                                        <div class="form-check d-flex justify-content-center mt-4">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example33" onclick="clickedforpassword()"/>
                                            <label class="form-check-label" for="form2Example33">
                                                Show password
                                            </label>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mt-4 mb-4 p-3">
                                            Sign in
                                        </button>

                                    </form>

                                    <!-- Register buttons -->
                                    <div class="text-center">
                                        <p>or sign up</p>
                                        <a href="{{ route('signup') }}" type="button" class="btn btn-link p-3 btn-block">
                                            Create an account
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
        </section>
        <!-- Section: Design Block -->
    </section>
    @include('js.login-js')
@endsection
