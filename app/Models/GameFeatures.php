<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameFeatures extends Model
{
    use HasFactory;

    protected $table = 'gamefeatures';

    protected $fillable = [
        'gameID',
        'header',
        'description',
        'video',
    ];
}
