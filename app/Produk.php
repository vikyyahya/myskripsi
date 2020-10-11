<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    public $table = "produk";
    protected $fillable = [
        'nama_produk', 'title', 'diskripsi', 'type', 'gambar', 'harga'
    ];
}
