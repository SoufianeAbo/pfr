<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Genres extends Model
{
    use HasFactory;

    protected $table = 'genres';

    protected $fillable = [
        'name',
    ];

}
