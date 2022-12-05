<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuatLaporan extends Model
{
    use HasFactory;

    protected $foreignKeys = [
        'nota' => 'nota_id'
    ];

    protected $fillable = [
        'nama',
        'nonota',
        'user_id',
        'nota_id',

        // 100gr
        'bawa100gr',
        'uang100gr',
        'keterangan100gr',
        //50gr
        'bawa50gr',
        'uang50gr',
        'keterangan50gr',
        //bumbu
        'bawabumbu',
        'uangbumbu',
        'keteranganbumbu',
        //santan
        'bawasantan',
        'uangsantan',
        'keterangansantan',
        //pecel
        'bawapecel',
        'uangpecel',
        'keteranganpecel',
        //garam
        'bawagaram',
        'uanggaram',
        'keterangangaram',
    ];

    public function sales()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
        // $laporan = User::find(2)->BuatLaporan;
    }

    public function nota()
    {
        return $this->belongsTo(User::class, 'nota_id', 'id');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
}
