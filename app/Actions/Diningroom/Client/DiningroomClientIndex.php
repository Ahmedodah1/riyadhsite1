<?php

namespace App\Actions\Diningroom\Client;

use App\Models\Diningroom;
use Lorisleiva\Actions\Concerns\AsAction;

class DiningroomClientIndex
{
    use AsAction;

    public function handle()
    {
        $diningrooms = Diningroom::query()->get();
        return view('diningroom.client.diningroom', compact('diningrooms'));
    }
}
