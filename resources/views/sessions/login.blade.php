@extends('layout')

@section('title', 'Sign In')

@section('content')

<section class="login">
              <h1>
                  Sign In
              </h1>
              <form method="post" action="{{ route('handleLogin') }}">
              @csrf
                  <div>
                      <label for="email">Your email</label>
                      <input type="email" name="email" id="email" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" required="">
                  </div>
                  <button type="submit">Sign In</button>
                  <p>
                      Don't yet have an account? <a href="/register">Register Here</a>
                  </p>
              </form>
</section>

@endsection