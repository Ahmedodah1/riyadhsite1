<?php

namespace App\Actions\Coins\Admin;

use App\Models\Coin;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteCoinAction
{
    use AsAction;

    public function handle(Coin $coin)
    {
        $coin->delete();
        return back();
    }
}
