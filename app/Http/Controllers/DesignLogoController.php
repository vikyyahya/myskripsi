<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;


class DesignLogoController extends Controller
{
    //
    public function index()

    {
        $produk = Produk::where('type', 'Design Graphic')->get();
        $design_exterior = ["design_exterior1.jpeg", "design_exterior2.jpeg", "design_exterior3.jpeg", "design_exterior4.jpeg"];
        return view('design_logo.design_logo', ['design_interior' => $produk]);
        // return view('design_logo.design_logo',['design_interior' => $design_logo]);
    }
}
