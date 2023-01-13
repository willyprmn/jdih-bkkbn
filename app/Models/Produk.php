<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'jdih_produk';

    public function jenis()
    {
        return $this->hasOne('App\Models\Jenis','id','jenis_id');
    }
}
