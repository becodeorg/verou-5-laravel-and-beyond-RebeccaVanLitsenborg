<nav class="bg-gray-100 mb-10 border-gray-200">
    <div class="flex items-center justify-between mx-auto p-4">
        <div class="flex items-center space-x-3">
        </div>
        <div class="hidden md:flex items-center space-x-4" id="navbar-default">
            <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded hover:bg-blue-800" aria-current="page">Home</a>
            <a href="{{ route('allBooks') }}"  class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100">Book Log</a>
            <a href="{{ route('showRegister') }}"  class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100">Register</a>
        </div>
    </div>
</nav>