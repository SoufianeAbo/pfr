<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePictures extends Model
{
    use HasFactory;

    protected $table = 'gamepictures';

    protected $fillable = [
        'gameID',
        'smallLogo',
        'bigLogo',
        'awards',
        'awards2',
        'divider',
        'pic1',
        'pic2',
        'pic3',
        'divider2',
        'pageVid',
        'headerVid',
        'gameBg',
        'gameBg2',
    ];
}
