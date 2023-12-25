<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Produk extends Model
{
    public $timestamps = false;
    protected $table ='produk';
    protected $primaryKey ='id_produk';
    protected $fillable = [
                    'nama_produk',
                    'harga',
                    'kategori_id',
                    'status_id'
                ];

    public function kategories()
    {
        return $this->hasOne(Kategori::class,'id_kategori','kategori_id');
    }

    public function statuses()
    {
        return $this->hasOne(Status::class,'id_status','status_id');
    }

}
