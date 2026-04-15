<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $fillable = [
        'about_lines',
        'phone_numbers',
        'marketing_numbers',
        'email',
        'address',
    ];

    protected $casts = [
        'phone_numbers' => 'array',
        'marketing_numbers' => 'array',
        // store about_lines as array for easier editing
        'about_lines' => 'array',
    ];
}
