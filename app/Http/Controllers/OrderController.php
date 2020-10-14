<?php

namespace App\Http\Controllers;

use App\Mail\EmailBerhasilKonfirmasi;
use Illuminate\Support\Facades\Mail;
use App\Order;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $users = Order::paginate(5);
        return view('order.order', ['users' => $users]);
    }

    public function myOrder()
    {
        $users = Order::all()->where('id_user', Auth::user()->id)->where('status_pembayaran', '1');
        return view('order.my_order', ['order' => $users]);
    }
    public function konfirmasi($id)
    {
        $user = Order::find($id);
        if ($user->status_pembayaran == '1') {
            $user->status_pembayaran = '0';
        } else {
            $user->status_pembayaran = '1';
            Mail::to(Auth::user()->email)->send(new EmailBerhasilKonfirmasi($id));
        }
        $user->save();
        return redirect('/order')->with('sukses', 'Data berhasil di konfirmasi!');
    }

    public function report()
    {
        $users = Order::where('progress', '100%')->paginate(5);
        return view('order.report', ['users' => $users]);
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update($request->all());
        return redirect('/order')->with('sukses', 'Data Berhasil Di Update!');
    }

    public function tampilupdate($id)
    {
        $users = Order::find($id);
        return view('order.updateorder', ['order' => $users]);
    }
}
