<nav id="navbar-default">
<a href="{{ route('home') }}">
    <img src="{{ asset('logo.png') }}" alt="Logo" style="width: 50px; height: auto;">
</a>
    <h1 id="welcome">Welcome</h1>
    <div class ="navlinks">
        <a href="/" aria-current="page">Home</a>
        <a href="{{ route('allBooks') }}">Book Log</a>
@if(auth()->check())
        <a href="{{ route('logout') }}">Logout</a>
@else
         <a href="{{ route('login') }}">Login</a>
@endif
    </div>
</nav>