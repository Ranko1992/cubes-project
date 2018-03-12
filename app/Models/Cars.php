<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = [
        'title', 'model', 'production_year', 'miles', 'power', 'fuel',
        'photo_filename', 'photo_filename_1', 'photo_filename_2', 'photo_filename_3', 'photo_filename_4', 
        'photo_filename_5', 'photo_filename_6', 'description', 'specification', 'price'
    ];
    
}
