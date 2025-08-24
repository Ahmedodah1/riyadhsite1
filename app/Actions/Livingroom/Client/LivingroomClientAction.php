<?php

namespace App\Actions\Livingroom\Client;
use App\Models\Livingroom;

use Lorisleiva\Actions\Concerns\AsAction;

class LivingroomClientAction
{
    use AsAction;

    public function handle()
    {
        $livingrooms = Livingroom::query()->get();
        return view('livingroom.client.livingroom', compact('livingrooms'));
    }
}
