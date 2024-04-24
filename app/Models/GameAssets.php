<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameAssets extends Model
{
    use HasFactory;

    protected $fillable = [
        'gameID',
        'gridVertical',
        'widescreenPic',
        'smallLogo',
        'gridVertical2',
    ];
}
