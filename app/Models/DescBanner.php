<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescBanner extends Model
{
    use HasFactory;

    protected $table = 'desc_banner';

    protected $fillable = [
        'word_kz',
        'word_ru'
    ];
}
