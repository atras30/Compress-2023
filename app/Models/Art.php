<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Art extends Model
{
    use HasFactory;
    protected $table = 'arts';
    protected $guarded = [
        "id"
    ];

    public function likes()
    {
        return $this->hasMany(ArtLike::class, 'art_id');
    }
}
