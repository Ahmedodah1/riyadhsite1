<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SumBook extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
