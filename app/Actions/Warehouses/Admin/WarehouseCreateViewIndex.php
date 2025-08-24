<?php

namespace App\Actions\Warehouses\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class WarehouseCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('warehouse.admin.create');
    }
}
