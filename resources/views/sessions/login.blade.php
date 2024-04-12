@extends('layout')

@section('title', 'Sign In')

@section('content')

<section class="login">
    <div class="login-welcome">
    <div class="welcome-content">
            <h1>Welcome</h1>
        </div>
    </div>

        <form class="login-form" method="post" action="{{ route('handleLogin') }}">
            @csrf
            <h1 class="">
                Sign in
            </h1>
            <div>
                <label for="email" class="register-label">Your email</label>
                <input type="email" name="email" id="email" class="" placeholder="name@company.com" required="">
            </div>
            <div>
                <label for="password" class="register-label">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="" required="">
            </div>
            <button type="submit" class="create-account">Sign In</button>
            <div class="login-link">
                <p>
                    Don't yet have an account? <a href="/register" class="link"><strong>Register Here</strong></a>
                </p>
            </div>
        </form>
</section>

@endsection