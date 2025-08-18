<?php

namespace App\Actions\Office\Client;

use App\Models\Office;
use Lorisleiva\Actions\Concerns\AsAction;

class OfficeClientAction
{
    use AsAction;

    public function handle()
    {
        $offices = Office::query()->get();
        return view('office.client.office', compact('offices'));
    }
}
