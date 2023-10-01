<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'no_tlp',
    ];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
