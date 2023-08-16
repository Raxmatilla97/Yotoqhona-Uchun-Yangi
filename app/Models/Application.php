<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'fish',
        'number_generation',
        'holat',
        'pass_info',
        'telefon',
        'fakultet',
        'yonalish',
        'kurs_nomeri',
        'guruhi',
        'mezon',
        'files',
        'message',
        'tekshirgan_user_id',
    ];

    protected $table = "applications";
}
