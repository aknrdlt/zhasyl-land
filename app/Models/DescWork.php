<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescWork extends Model
{
    use HasFactory;

    protected $table = 'desc_work';

    protected $fillable = [
        'word_kz',
        'word_ru'
    ];
}
