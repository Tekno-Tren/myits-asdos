<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;

    protected $table ='pertemuan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'tanggal',
        'jam',
        'tempat',
        'status_kehadiran',
        'kelas_id'
    ];


    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas', 'kelas_id', 'id');
    }

    public function berita_acara()
    {
        return $this->hasOne('App\Models\Materi', 'pertemuan_id', 'id');
    }

    public function bukti_kehadiran()
    {
        return $this->hasOne('App\Models\Bukti', 'pertemuan_id', 'id');
    }
}
