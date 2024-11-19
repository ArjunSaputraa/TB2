<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produks'; //nama table sesuai di database mysql
    protected $fillable = ['kode_produk','nama_produk','deskripsi','jumlah_produk','image','created_at','update_at', 'user_id'];
}
