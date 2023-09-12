@extends('welcome')

@push('title','Home')

@section('body')
    <section class="row m-0 p-5" style="width: 100vw; height: 100vh; background-image: url('https://media.istockphoto.com/id/1337260312/photo/floral-seamless-pattern-multicolored-flowers-peonies-on-a-black-background.jpg?s=612x612&w=0&k=20&c=Ef__0N2pidmL7c2_6JREDaHpJ2z02oZRep-N-4v0Rug=');">
        <div class="login-form bg-light p-5" style="border-radius: 12px; overflow: hidden; min-width: 400px; max-width: min-content; margin: auto;">
            <h2><b>Login</b></h2>
            <p class="mt-0 pt-0 text-secondary" style="font-size: 12px;">
                login your, account here
            </p>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <button class="btn bg-dark text-light p-3 mt-3" style="width: 100%"><b>Proceed</b></button>
            <div class="text-center" style="width: 100%;"><b class="text-secondary p-2 m-3">or</b></div>
            <button class="btn text-light p-3 mt-3" style="width: 100%; background-color: rebeccapurple;"><b>Create New Account</b></button>
        </div>
    </section>
@endsection