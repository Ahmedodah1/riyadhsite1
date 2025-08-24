<?php

namespace App\Actions\Warehouses\Client;

use App\Models\Warehouses;
use Lorisleiva\Actions\Concerns\AsAction;

class WarehouseClientAction
{
    use AsAction;

    public function handle()
    {
        $warehouses = Warehouses::query()->get();
        return view('warehouses.client.warehouse', compact('warehouses'));
    }
}
