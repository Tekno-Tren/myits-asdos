<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukti extends Model
{
    use HasFactory;

    protected $table ='buktifoto';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'filename',
        'original_name',
        'file_path',
        'user_id',
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
}
