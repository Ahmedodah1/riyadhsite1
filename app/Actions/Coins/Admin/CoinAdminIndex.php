<?php

namespace App\Actions\Coins\Admin;

use App\Models\Coin;
use Lorisleiva\Actions\Concerns\AsAction;

class CoinAdminIndex
{
    use AsAction;

    public function handle()
    {
        $coins = Coin::query()->get();
        return view('coins.admin.index' , compact('coins'));
    }

}
