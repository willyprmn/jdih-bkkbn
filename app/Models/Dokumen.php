<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = 'jdih_dokumen';
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->hasOne('App\Models\Kategori', 'id', 'kategori_id');
    }

    public function status()
    {
        return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }
}
