<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameAssets extends Model
{
    use HasFactory;

    protected $table = 'gameassets';
    protected $primaryKey = 'gameID';

    protected $fillable = [
        'gameID',
        'gridVertical',
        'widescreenPic',
        'smallLogo',
        'bgColor',
    ];
}
