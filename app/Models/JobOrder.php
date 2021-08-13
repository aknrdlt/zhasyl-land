<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    use HasFactory;

    protected $table = 'job_order';

    protected $fillable = [
        'word_kz',
        'word_ru',
        'image'
    ];
}
