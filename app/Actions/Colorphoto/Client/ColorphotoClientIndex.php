<?php

namespace App\Actions\Colorphoto\Client;

use App\Models\Colorphoto;
use Lorisleiva\Actions\Concerns\AsAction;

class ColorphotoClientIndex
{
    use AsAction;

    public function handle()
    {
        $colorphotos = Colorphoto::query()->get();
        return view('colorphoto.client.colorphoto', compact('colorphotos'));
    }
}
