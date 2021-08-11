<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockMenu extends Model
{
    use HasFactory;

    protected $table = 'block_menu';

    protected $fillable = [
        'word_kz',
        'word_ru'
    ];
}
