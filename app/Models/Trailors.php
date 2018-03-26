<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trailors extends Model
{
    protected $fillable = [
      'title', 'photo_filename', 'description', 'price'  
    ];
}
