<?php

namespace App\Actions\ClientBlackAndWhite;

use Lorisleiva\Actions\Concerns\AsAction;

class BlackAndWhite
{
    use AsAction;

    public function handle()
    {
        $clients=\App\Models\BlackAndWhite::query()->get();
        return view('clientBlackAndWhite.BlackAndWhite', compact('clients'));
    }
}
