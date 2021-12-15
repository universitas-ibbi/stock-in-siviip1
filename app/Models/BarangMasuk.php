<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = "tblbarangmasuk";

    protected $fillable = ["tanggal","produk_id","qty"];

    /**
     * Get the Produk that owns the BarangMasuk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produk()
    {
        return $this->belongsTo(\App\Models\Produk::class);
    }
}
