<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'series',
        'author',
        'year',
        'publisher',
        'genre',
        'price',
        'sale_date',
        'thumb',
        'description'
    ];
}
