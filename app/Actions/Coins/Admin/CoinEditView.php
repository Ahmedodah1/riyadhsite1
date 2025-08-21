<?php

namespace App\Actions\Coins\Admin;

use App\Models\Coin;
use Lorisleiva\Actions\Concerns\AsAction;

class CoinEditView
{
    use AsAction;

    public function handle($id)
    {
        $coin = Coin::findOrFail($id);

        // جلب كل العملات الأخرى للاختيار منها كـ related
        $allCoins = Coin::where('id', '!=', $coin->id)->get();

        return view('coins.admin.edit', compact('coin', 'allCoins'));
    }
}
