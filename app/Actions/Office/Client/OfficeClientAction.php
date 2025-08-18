<?php

namespace App\Actions\Office\Client;

use App\Models\Pool;
use Lorisleiva\Actions\Concerns\AsAction;

class OfficeClientAction
{
    use AsAction;

    public function handle()
    {
        $office = Office::query()->get();
        return view('office.client.pool', compact('office'));
    }
}
