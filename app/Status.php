<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Status extends Model
{
    public $timestamps = false;
    protected $table ='status';
    protected $primaryKey ='id_status';
    protected $fillable = [
                    'nama_status'
                ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
