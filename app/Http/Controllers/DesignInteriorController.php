<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignInteriorController extends Controller
{
    //
    public function index()
            
    {
        $design_interior = ["design_interior1.jpeg","design_interior2.jpeg","design_interior3.jpeg","design_interior4.jpeg"];
        return view('design_interior.design_interior',['design_interior' => $design_interior]);
    }

}
