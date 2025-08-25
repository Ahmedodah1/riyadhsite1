<?php

namespace App\Actions\Chambers\Client;
use App\Models\Chambers;

use Lorisleiva\Actions\Concerns\AsAction;

class ChamberClientAction
{
    use AsAction;

    public function handle()
    {
        $chambers = Chambers::query()->get();
        return view('chamber.client.chamber', compact('chambers'));
    }
}
