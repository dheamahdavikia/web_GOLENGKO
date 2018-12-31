<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelanggan extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
    use SoftDeletes;
 
    protected $fillable = [
        'nama', 'alamat'
    ];
    protected $dates = ['deleted_at'];
}