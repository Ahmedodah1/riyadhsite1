<?php

namespace App\Actions\Coins\Client;

use App\Models\Coin;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowCoinIndex
{
    use AsAction;

    public function handle($id)
    {
        $coin = Coin::findOrFail($id);

        // جلب العملات المشابهة (من نفس الدولة)
        $relatedCoins = Coin::where('id', '!=', $coin->id)
            ->where('country', $coin->country)
            ->take(4) // عدد العملات المشابهة
            ->get();

        return compact('coin', 'relatedCoins');
    }

    public function asController($id)
    {
        $data = $this->handle($id);

        return view('coins.client.show', $data);
    }
}
