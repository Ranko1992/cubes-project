<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slep extends Model
{
     protected $fillable = [
        'description','price','contact','photo_filename',
    ];
}
