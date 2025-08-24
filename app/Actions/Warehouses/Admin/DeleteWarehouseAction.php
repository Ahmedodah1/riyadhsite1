<?php

namespace App\Actions\Warehouses\Admin;

use App\Models\Warehouses;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteWarehouseAction
{
    use AsAction;

    public function handle(Warehouses $warehouse)
    {
        $warehouse->delete();
        return back();
    }
}
