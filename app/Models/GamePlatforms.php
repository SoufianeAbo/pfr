<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GamePlatforms extends Model
{
    use HasFactory;

    protected $table = 'gameplatforms';

    protected $fillable = [
        'gameID',
        'platformID',
    ];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class, 'gameID');
    }

    public function platform(): BelongsTo
    {
        return $this->belongsTo(Platforms::class, 'platformID');
    }
}
