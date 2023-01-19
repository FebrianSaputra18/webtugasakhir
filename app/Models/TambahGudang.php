<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahGudang extends Model
{
    use HasFactory;

    protected $fillable = [
        'tempung100gr' => 'tepung100gr',
        'tepung50gr' => 'tepung50gr',
        'pecel' => 'pecel',
        'santan' => 'santan',
        'bumbu' => 'bumbu',
        'garam' => 'garam'
    ];
}
