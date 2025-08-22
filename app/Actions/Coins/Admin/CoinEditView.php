<?php

namespace App\Actions\Coins\Admin;

use App\Models\Coin;
use Lorisleiva\Actions\Concerns\AsAction;

class CoinEditView
{
    use AsAction;

    public function handle($id)
    {
        $coin = Coin::with('relatedCoins')->findOrFail($id); // جلب العملة مع العملات المشابهة
        $allCoins = Coin::where('id', '!=', $id)->get();     // جميع العملات باستثناء الحالية

        return view('coins.admin.edit', compact('coin', 'allCoins'));
    }
}
