<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'country', // ✨ أضفنا الدولة هنا
    ];

    // علاقة العملات المشابهة
    public function relatedCoins()
    {
        return $this->hasMany(RelatedCoin::class);
    }
}
