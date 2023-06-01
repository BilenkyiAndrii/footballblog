<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'image',
        'name',
        'description',
        'category_id'];
}
