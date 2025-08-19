<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diningroom extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
