<nav class="bg-gray-100 mb-4 border-gray-200">
    <div class="flex items-center justify-between mx-auto p-3">
        <div class="flex items-center space-x-3">
        </div>
        <div class="hidden md:flex items-center space-x-4" id="navbar-default">
        <a href="/" class="block py-1 px-2 text-sm text-white bg-blue-700 rounded hover:bg-blue-800" aria-current="page">Home</a>
<a href="{{ route('allBooks') }}" class="block py-1 px-2 text-sm text-gray-900 rounded hover:bg-gray-100">Book Log</a>
@if(auth()->check())
    <a href="{{ route('logout') }}" class="block py-1 px-2 text-sm text-gray-900 rounded hover:bg-gray-100">Logout</a>
@else
    <a href="{{ route('login') }}" class="block py-1 px-2 text-sm text-gray-900 rounded hover:bg-gray-100">Login</a>
@endif
        </div>
    </div>
</nav>