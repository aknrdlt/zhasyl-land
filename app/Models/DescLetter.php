<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescLetter extends Model
{
    use HasFactory;

    protected $table = 'desc_letter';

    protected $fillable = [
        'word_kz',
        'word_ru'
    ];
}
