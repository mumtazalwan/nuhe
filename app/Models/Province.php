<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_name',
        'capital',
        'local_language',
        'island',
        'population',
        'ethnic',
        'regional_house',
        'regional_house_image',
        'dance',
        'dance_image',
        'weapon',
        'weapon_image',
        'music',
        'music_image',
        'tradition',
        'flash_info',
        'more_detail',
    ];
}
