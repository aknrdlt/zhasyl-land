<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'word_kz',
        'word_ru',
        'image',
        'link'
    ];
}
