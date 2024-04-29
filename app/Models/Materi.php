<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table ='materi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'materi',
        'user_id',
        'kelas_id',
        'pertemuan_id',
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas', 'kelas_id', 'id');
    }

    public function pertemuan()
    {
        return $this->belongsTo('App\Models\Pertemuan', 'pertemuan_id', 'id');
    }
}
