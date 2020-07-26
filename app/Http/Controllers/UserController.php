<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function user()
    {
        $users = User::all();
        return view('user.user', ['users' => $users]);
    }

    // public function user()
    // {
    //     $users = User::all();
    //     return view('user.user', ['users' => $users]);
    // }




}
