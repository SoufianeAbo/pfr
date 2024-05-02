<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'creatorID',
        'esrb',
    ];

    public function assets(): HasOne
    {
        return $this->hasOne(GameAssets::class, 'gameID');
    }

    public function platforms(): HasMany
    {
        return $this->hasMany(GamePlatforms::class, 'gameID');
    }
    
    public function features(): HasMany
    {
        return $this->hasMany(GameFeatures::class, 'gameID');
    }

    public function pictures(): HasOne
    {
        return $this->hasOne(GamePictures::class, 'gameID');
    }

    public function text(): HasOne
    {
        return $this->hasOne(GameText::class, 'gameID');
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genres::class, 'genreID');
    }
}
