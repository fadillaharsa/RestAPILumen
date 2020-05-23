<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Produk extends Model
{
    protected $table='produk';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'harga','warna','kondisi','deskripsi'
    ];

}
