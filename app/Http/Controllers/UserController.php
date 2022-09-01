<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user', [
            'users' => User::get()
        ]);
    }
}
