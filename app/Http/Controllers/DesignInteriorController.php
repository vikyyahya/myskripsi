<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class DesignInteriorController extends Controller
{
    //
    public function index()

    {
        $design_interior = ["design_interior1.jpeg", "design_interior2.jpeg", "design_interior3.jpeg", "design_interior4.jpeg"];

        $produk = Produk::where('type', 'Design Interor')->get();

        return view('design_interior.design_interior', ['design_interior' => $produk]);
    }


    public function detail($id)
    {
        $design_interior = ["design_interior1.jpeg", "design_interior2.jpeg", "design_interior3.jpeg", "design_interior4.jpeg"];

        $produk = Produk::find($id);

        return view('design_interior.detail_design_in', ['produk' => $produk]);
    }

    public function pembayaran($id)
    {
        $design_interior = ["design_interior1.jpeg", "design_interior2.jpeg", "design_interior3.jpeg", "design_interior4.jpeg"];

        $produk = Produk::find($id);

        return view('design_interior.pembayaran_des_in', ['produk' => $produk]);
    }
}
