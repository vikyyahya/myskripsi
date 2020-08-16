<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignLogoController extends Controller
{
    //
    public function index()
            
    {
        $design_logo = ["design_logo1.jpeg","design_logo2.jpeg","design_logo3.jpeg","design_logo4.jpeg"];
        return view('design_logo.design_logo',['design_interior' => $design_logo]);
    }
}
