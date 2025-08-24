<?php

namespace App\Actions\Landscape\Client;

use Lorisleiva\Actions\Concerns\AsAction;

class LandscapeClientAction
{
    use AsAction;

    public function handle()
    {
        $landscapes = Livingroom::query()->get();
        return view('Landscape.client.landscape', compact('landscapes'));
    }
}

