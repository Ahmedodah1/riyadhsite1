<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Decor extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
