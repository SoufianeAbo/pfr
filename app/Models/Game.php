<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $fillable = [
        'title',
        'subtitle',
        'releaseDate',
        'status',
        'genre',
        'featured',
        'developer',
        'videoTrailer',
        'description',
        'esrb',
    ];

    public function assets(): HasOne
    {
        return $this->hasOne(GameAssets::class, 'gameID');
    }
}
