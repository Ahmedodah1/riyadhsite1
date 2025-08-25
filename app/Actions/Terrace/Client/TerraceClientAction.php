<?php

namespace App\Actions\Terrace\Client;
use App\Models\Terraces;

use Lorisleiva\Actions\Concerns\AsAction;

class TerraceClientAction
{
    use AsAction;

    public function handle()
    {
        $terraces = Terraces::query()->get();
        return view('terrace.client.terrace', compact('terraces'));
    }
}

