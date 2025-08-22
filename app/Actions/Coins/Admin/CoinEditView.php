<?php

namespace App\Actions\Coins\Admin;

use App\Models\Coin;
use App\Models\Colorphoto;
use Lorisleiva\Actions\Concerns\AsAction;

class CoinEditView
{
    use AsAction;

    public function handle($id)
    {
        $coin = Coin::findOrFail($id);       // جلب العملة التي سيتم تعديلها
        $allCoins = Coin::all();              // جلب كل العملات لعرضها في قائمة "العملات المشابهة"

        return view('coins.admin.edit', compact('coin', 'allCoins'));
    }

}
