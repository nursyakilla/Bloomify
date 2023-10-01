<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jenis',
        'gambar',
        'stok',
        'harga',
    ];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class, 'id_pesanan');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'id_review');
    }
}
