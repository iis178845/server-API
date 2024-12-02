<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'nama_pelanggan',
        'whatsapp',
        'alamat',
    ];
}
