<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kategori extends Model
{
    public $timestamps = false;
    protected $table ='kategori';
    protected $primaryKey ='id_kategori';
    protected $fillable = [
                    'nama_kategori'
                ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}

