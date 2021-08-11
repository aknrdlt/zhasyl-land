<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescInstruments extends Model
{
    use HasFactory;

    protected $table = 'desc_instruments';

    protected $fillable = [
        'word_kz',
        'word_ru'
    ];
}
