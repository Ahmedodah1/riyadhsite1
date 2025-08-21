<?php

namespace App\Actions\Coins\Admin;

use App\Models\Coin;
use App\Models\Colorphoto;
use Lorisleiva\Actions\Concerns\AsAction;

class CoinEditView
{
    use AsAction;

    public function handle($id)  // 👈 استقبل الـ id
    {
        $coin = Coin::findOrFail($id); // 👈 عنصر واحد فقط
        return view('coins.admin.edit' , compact('coin'));
    }

}
