<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;


class KonfirmasiPembayaran extends Controller
{
    //
    public function index()

    {

        return view('konfirmasipembayaran.konfirmasipembayaran');
    }

    public function konfirmasi(Request $request)

    {
        // return $request;
        $nama_produk = str_replace(' ', '_', $request->id);
        $data = $request->all();
        $fileName = $nama_produk . time() . '.' . $request->file->extension();

        $produk = Order::find($request->id);
        $produk->nama_bank = $request->nama_bank;
        $produk->no_rekening = $request->no_rekening;
        $produk->tanggal_pembayaran = $request->tanggal_pembayaran;
        $produk->bukti_pembayaran = $fileName;
        $produk->save();
        $request->file->move(public_path('uploads'), $fileName);

        return view('konfirmasipembayaran.berhasilkonfirmasi');
    }
}
