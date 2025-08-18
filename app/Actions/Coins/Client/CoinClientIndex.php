<?php

namespace App\Actions\Coins\Client;

use App\Models\Coin;
use Lorisleiva\Actions\Concerns\AsAction;

class CoinClientIndex
{
    use AsAction;

    public function handle()
    {
        $coins = Coin::query()->get();
        return view('coins.client.coin', compact('coins'));
    }
}
