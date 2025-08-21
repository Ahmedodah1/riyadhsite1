<?php

namespace App\Actions\Coins\Admin;

use App\Models\Coin;
use Lorisleiva\Actions\Concerns\AsAction;

class CoinEditView
{
    use AsAction;

    public function handle($id)
    {
        // جلب العملة الحالية
        $coin = Coin::findOrFail($id);

        // جلب كل العملات الأخرى لاستخدامها كـ related
        $allCoins = Coin::where('id', '!=', $coin->id)->get();

        // تمرير العملة و كل العملات الأخرى للـ Blade
        return view('coins.admin.edit', compact('coin', 'allCoins'));
    }
}
