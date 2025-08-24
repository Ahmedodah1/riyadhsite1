<?php

namespace App\Actions\Warehouses\Admin;

use App\Models\Warehouses;
use Lorisleiva\Actions\Concerns\AsAction;

class WarehousesAdminIndex
{
    use AsAction;

    public function handle()
    {
        $warehouses = Warehouses::query()->get();
        return view('warehouses.admin.index' , compact('warehouses'));
    }
}
