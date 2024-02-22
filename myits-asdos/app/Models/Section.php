<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table ='section';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'rekap_nilai',
        'filename',
        'original_name',
        'file_path',
        'user_id',
        'kelas_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas', 'kelas_id', 'id');
    }
}
