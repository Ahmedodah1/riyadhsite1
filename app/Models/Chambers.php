<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chambers extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
