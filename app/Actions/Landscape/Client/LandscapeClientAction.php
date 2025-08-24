<?php

namespace App\Actions\Landscape\Client;
use App\Models\Landscapes;

use Lorisleiva\Actions\Concerns\AsAction;

class LandscapeClientAction
{
    use AsAction;

    public function handle()
    {
        $landscapes = Landscapes::query()->get();
        return view('Landscape.client.landscape', compact('landscapes'));
    }
}

