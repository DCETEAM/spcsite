<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    protected $table = 'why_choose_us';

    protected $fillable = [
        'title', 'description',
        'stat1_icon','stat1_value','stat1_title',
        'stat2_icon','stat2_value','stat2_title',
        'stat3_icon','stat3_value','stat3_title',
        'stat4_icon','stat4_value','stat4_title'
    ];
}
