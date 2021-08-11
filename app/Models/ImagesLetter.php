<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesLetter extends Model
{
    use HasFactory;


    protected $table = 'images_work';


    protected $fillable = [
        'image',
        'word_ru'
    ];
}
