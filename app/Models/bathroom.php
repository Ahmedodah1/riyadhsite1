<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bathroom extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
