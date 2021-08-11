<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescArticles extends Model
{
    use HasFactory;

    protected $table = 'desc_articles';

    protected $fillable = [
        'word_kz',
        'word_ru'
    ];
}
