<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buatlaporankaryawan extends Model
{
    use HasFactory;

    protected $fillable = [
        // 100gr
        'bawa100gr',
        'laku100gr',
        'uang100gr',
        'keterangan100gr',
        //50gr
        'bawa50gr',
        'laku50gr',
        'uang50gr',
        'keterangan50gr',
        //bumbu
        'bawabumbu',
        'lakubumbu',
        'uangbumbu',
        'keteranganbumbu',
        //santan
        'bawasantan',
        'lakusantan',
        'uangsantan',
        'keterangansantan',
        //pecel
        'bawapecel',
        'lakupecel',
        'uangpecel',
        'keteranganpecel',
        //garam
        'bawagaram',
        'lakugaram',
        'uanggaram',
        'keterangangaram',
    ];
}
