<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table ='kelas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'waktu',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
