<?php

namespace App\Actions\Coins\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class CoinCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('coins.admin.create');
    }

}
