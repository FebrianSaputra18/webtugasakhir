<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
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
    public function admin()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');

        // $laporan = User::find(2)->BuatLaporan;
    }
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
}
