<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talkshow extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'namalengkap',
        'email',
        'universitas',
        'medsos',
        'nim',
        'prodi',
        'angkatan',
    ];
}
