<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public $table = "orders";

    protected $fillable = [
        'id_user', 'id_produk', 'status_pembayaran', 'bukti_pembayaran', 'tanggal_pembayaran', 'nama_bank', 'no_rekening', 'keterangan'
    ];
}
