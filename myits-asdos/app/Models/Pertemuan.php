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
        'kelas_id',
        'pertemuan_id'
    ];


    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas', 'kelas_id', 'id');
    }
}
