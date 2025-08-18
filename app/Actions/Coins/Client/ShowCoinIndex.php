<?php

namespace App\Actions\Coins\Client;

use App\Models\Coin;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowCoinIndex
{
    use AsAction;

    public function handle()
    {
        return Coin::findOrFail();
    }

    public function asController()
    {
        $coin = $this->handle();
        return view('coins.client.show', compact('coin'));
    }
}
