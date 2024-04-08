@extends('layout')

@section('title', 'Register')

@section('content')

<section class="register-account">
    <div class="register-welcome">
        <h1>Welcome</h1>
</div>
              <form class="register-form" method="post" action="{{ route('submitRegister') }}">
              @csrf
              <h1 class="">
                  Create an account
              </h1>
                  <div>
                      <label for="email" class="register-label">Name</label>
                      <input type="name" name="name" id="name" class="" placeholder="Your name" required="">
                  </div>
                  <div>
                      <label for="email" class="register-label">Your email</label>
                      <input type="email" name="email" id="email" class="" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="register-label">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="" required="">
                  </div>
                  <div>
                      <label for="confirm-password" class="register-label">Confirm password</label>
                      <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="" required="">
                  </div>
                  <button type="submit" class="create-account">Create an account</button>
                  <div class="login-link">
                  <p>
                      Already have an account? <a href="/login" class="link"><strong>Login here</strong></a>
                  </p>
                  </div>
              </form>
</section>

@endsection