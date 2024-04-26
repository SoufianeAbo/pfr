<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameText extends Model
{
    use HasFactory;

    protected $table = 'gametext';

    protected $fillable = [
        'headerBig',
        'headerDesc',
        'postfBig',
        'postfDesc',
        'secondfDesc',
        'minimumReq',
        'recomReq',
    ];
}
