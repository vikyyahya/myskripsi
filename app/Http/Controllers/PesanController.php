<?php

namespace App\Http\Controllers;

use App\User;
use App\Pesan;


use Illuminate\Http\Request;

class PesanController extends Controller
{
    //
    public function index()
    {
        $users = Pesan::paginate(5);
        return view('pesan.pesan', ['users' => $users]);
    }
}
