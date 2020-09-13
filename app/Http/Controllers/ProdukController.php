<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Facades\Auth;


class ProdukController extends Controller
{
    //
    public function index()
    {
        $p = Produk::paginate(5);
        return view('produk.produk', ['produk' => $p]);
    }

    public function tambahproduk()
    {
        $p = Produk::all();
        $types = collect([
            ['id' => '1', 'name' => 'Design Exterior'],
            ['id' => '2', 'name' => 'Design Interor'],
            ['id' => '3', 'name' => 'Design Graphic'],
        ]);
        $type = $types->pluck('name', 'name');
        return view('produk.tambahproduk', ['produk' => $p, 'type' => $type]);
    }

    public function create(Request $request)
    {
        // return $request;
        $request->validate([
            'nama_produk' => 'required',
            'title' => 'required',
            'diskripsi' => 'required',
            'type' => 'required',
            'file' => 'required|max:2048',
        ]);
        $nama_produk = str_replace(' ', '_', $request->nama_produk);
        $data = $request->all();
        $fileName = $nama_produk . time() . '.' . $request->file->extension();
        // return $fileName;
        $request->file->move(public_path('uploads'), $fileName);
        $id_user = Auth::user()->id;
        Produk::create([
            'nama_produk' => $data['nama_produk'],
            'title' => $data['title'],
            'diskripsi' => $data['diskripsi'],
            'type' => $data['type'],
            'gambar' => $fileName,
        ]);
        return redirect('/produk')->with('sukses', 'Data Berhasil Di Upload!');
    }

    public function tampilubah($id)
    {
        $p = Produk::find($id);
        $types = collect([
            ['id' => '1', 'name' => 'Design Exterior'],
            ['id' => '2', 'name' => 'Design Interor'],
            ['id' => '3', 'name' => 'Design Graphic'],
        ]);
        $type = $types->pluck('name', 'name');
        return view('produk.ubahproduk', ['produk' => $p, 'type' => $type]);
    }

    public function update(Request $request, $id)
    {
        $a = $request;
        $request->validate([
            'nama_produk' => 'required',
            'title' => 'required',
            'diskripsi' => 'required',
            'type' => 'required',
        ]);
        $dok = Produk::find($id);
        if ($request->file != null) {
            $fileName = $request->nama_produk . time() . '.' . $request->file->extension();
            // return $fileName;
            $request->file->move(public_path('uploads'), $fileName);
        }
        $dok->update($request->all());
        return redirect('/produk')->with('sukses', 'Data Berhasil Di ubah!');
    }

    public function delete($id)
    {
        $user = Produk::find($id);
        $user->delete($user);
        return redirect('/produk')->with('sukses', 'Data berhasil dihapus!');
    }
}
