<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Order;
use Illuminate\Support\Facades\Auth;

use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

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
        $type = $produk->type;
        return view('design_interior.detail_design_in', ['produk' => $produk, 'type' => $type]);
    }

    public function pembayaran(Request $request, $id)
    {
        $design_interior = ["design_interior1.jpeg", "design_interior2.jpeg", "design_interior3.jpeg", "design_interior4.jpeg"];

        $produk = Produk::find($id);
        // return $request;
        $order = new Order;

        $order->id_produk = $produk->id;
        $order->id_user = Auth::user()->id;
        $order->status_pembayaran = false;
        $order->keterangan = $request->konsep;
        $order->save();
        $type = $produk->type;
        Mail::to(Auth::user()->email)->send(new SendEmail($order->id));

        return view('design_interior.pembayaran_des_in', ['produk' => $produk, 'id_order' => $order->id, 'type' => $type]);
    }
}
