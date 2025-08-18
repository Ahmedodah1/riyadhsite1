<?php

namespace App\Actions\Coins\Client;

use App\Models\Coin;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowCoinIndex
{
    use AsAction;

    public function handle($id)
    {
        return Coin::findOrFail($id);
    }

    public function asController($id)
    {
        $coin = $this->handle($id);
        return view('coins.client.show', compact('coin'));
    }
}
