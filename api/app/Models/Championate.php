<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Championate extends Model
{
    use HasFactory;
    protected $table = 'vbet';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'team',
        'matches',
        'pts',
    ];
}
