@extends('layout')

@section('title', 'Sign In')

@section('content')

<section class="mt-8 mb-28">
  <div class="flex flex-col items-center justify-center">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                  Sign In
              </h1>
              <form class="space-y-4 md:space-y-6" method="post" action="{{ route('handleLogin') }}">
              @csrf
                  <div>
                      <label for="email" class="block mb-8 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-8 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                  </div>
                  <button type="submit" class="w-full bg-gray-500 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white font-medium rounded-lg text-sm px-5 py-2.5">Sign In</button>
                  <p class="text-center text-sm font-light text-gray-500">
                      Don't yet have an account? <a href="/register" class="font-medium text-primary-600 hover:underline">Register Here</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>

@endsection