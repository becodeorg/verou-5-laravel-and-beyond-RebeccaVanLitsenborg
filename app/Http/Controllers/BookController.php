<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index ()
    {
        dd('Show Books');
    }

    public function show ()
    {
        dd('Show Book');
    }

    public function showCreate ()
    {
        dd('Show Create');
    }

    public function submitCreate ()
    {
        dd('Submit Create');
    }

    public function update ()
    {
        dd('Edit Book');
    }

    public function delete ()
    {
        dd('Delete Book');
    }
}