<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesWork extends Model
{
    use HasFactory;

    protected $table = 'images_work';

    protected $fillable = [
        'image'
    ];
}
