<?php

namespace App\Actions\Decors\Client;

use App\Models\Colorphoto;
use App\Models\Decor;
use Lorisleiva\Actions\Concerns\AsAction;

class DecorClientIndex
{
    use AsAction;

    public function handle()
    {
        $decors = Decor::query()->get();
        return view('Decors.client.decor', compact('decors'));
    }
}
