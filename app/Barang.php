<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barangs";

    protected $fillable = ['name','harga', 'stock', 'picture', 'created_at', 'updated_at'];


    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}


