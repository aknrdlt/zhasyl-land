<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescAboutCompany extends Model
{
    use HasFactory;

    protected $table = 'desc_about_company';

    protected $fillable = [
        'word_kz',
        'word_ru'
    ];
}
