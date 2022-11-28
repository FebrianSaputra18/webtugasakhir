<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tepung50gr',
        'tepung100gr',
        'pecel',
        'santan',
        'bumbu',
        'garam',
        'tanggalbuat',
        'keterangan',
    ];
}
