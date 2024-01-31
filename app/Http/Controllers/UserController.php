<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        dd('Show Users');
    }

    public function show ()
    {
        dd('Show User');
    }

    public function create ()
    {
        dd('New User');
    }

    public function updateUser ()
    {
        dd('Update');
    }

    public function deleteUser ()
    {
        dd('Delete');
    }
}