<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class DesignExteriorController extends Controller
{
    //

    public function index()

    {
        $produk = Produk::where('type', 'Design Exterior')->get();

        $design_exterior = ["design_exterior1.jpeg", "design_exterior2.jpeg", "design_exterior3.jpeg", "design_exterior4.jpeg"];
        return view('design_exterior.design_exterior', ['design_interior' => $produk]);
    }
}
