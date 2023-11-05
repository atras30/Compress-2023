<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopRegistration extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'full_name',
        'email',
        'asal_universitas',
        'line_id_or_whatsapp_number',
        'nim',
        'major',
        'angkatan',
        'know_commpress_from',
        'alasan'
    ];
}
