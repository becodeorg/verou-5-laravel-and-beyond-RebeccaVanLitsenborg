@extends('layout')

@section('title', 'Your Books')

@section('content')

<main class="flex flex-col items-center justify-center">
    <h1>Welcome</h1><br>
    
    <section>
        <div class="text-center w-full max-w-screen-xl">
        <h1>Your Current Library</h1><br>

        <ul class="list-none flex flex-col space-y-4">
    @forelse($books as $book)
        <li class="flex items-center space-x-8">
            <img src="{{ asset('icon.png') }}" alt="Icon" class="w-8 h-8 mr-2">
            <div class="flex items-center space-x-4">
                <strong>Title:</strong><span class="ml-2">{{ $book['title'] }}  |</span>
            </div> 
            <div class="flex items-center space-x-4">
                <strong>Author:</strong><span class="ml-2">{{ $book['author'] }}  |</span> 
            </div> 
            <div class="flex items-center space-x-4">
                <strong>Genre:</strong><span class="ml-2">{{ $book['genre'] }}  |</span>
            </div> 
            <div class="ml-auto">
                <a href="{{ route('editBook', $book['id']) }}" class="edit-link">Edit</a> | 
                <a href="{{ route('deleteBook', $book['id']) }}" class="delete-link" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this book?')) document.getElementById('delete-form-{{ $book->id }}').submit();">
                Delete</a>
            <!-- Form to handle delete -->
            <form id="delete-form-{{ $book->id }}" action="{{ route('deleteBook', ['id' => $book->id]) }}" method="post" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </div>
        </li>
    @empty
        <li class="text-center">No books available. Add your first book!
            <a href="{{ route('showCreate') }}">
                <button class="block mx-auto mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Add Book
                </button>
            </a>
        </li>
    @endforelse
</ul>
    <section>

    <div class="mt-8 flex items-center justify-center text-center m-auto">
            <a href="{{ route('showCreate') }}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Add Book
                </button>
            </a>
        </div>

</main>

@endsection