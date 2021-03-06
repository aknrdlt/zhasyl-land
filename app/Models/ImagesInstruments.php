<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesInstruments extends Model
{
    use HasFactory;

    protected $table = 'images_instruments';

    protected $fillable = [
        'image',
    ];
}
