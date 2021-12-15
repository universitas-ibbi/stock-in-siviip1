<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = "tblproduk";

    protected $fillable = ["nama","kelompok_id","satuan","harga"];

    // SELECT PRODUK.ID,PRODUK.KELOMPOK_ID,KELOMPOK.NAMA
    // FROM PRODUK
    // INNER JOIN KELOMPOK ON PRODUK.KELOMPOK_ID=KELOMPOK.ID
    public function kelompok()
    {
        return $this->belongsTo(\App\Models\Kelompok::class);
    }
}
