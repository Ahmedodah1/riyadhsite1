<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'country',
    ];

    // علاقة لجلب العملات المرتبطة
    public function relatedCoins()
    {
        return $this->hasMany(RelatedCoin::class);
    }
}
