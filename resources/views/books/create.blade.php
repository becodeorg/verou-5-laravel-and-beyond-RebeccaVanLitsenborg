@extends('layout')

@section('title', 'Add Book')

@section('content')

<section>
<div class="w-full max-w-xs mx-auto mt-8">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{ route('submitCreate') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" placeholder="Title" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Author:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" name="author" placeholder="Author" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Genre:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="genre" placeholder="Genre" required>
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Add Book
                </button>
            </div>
        </form>
    </div>
    <section>

@endsection
