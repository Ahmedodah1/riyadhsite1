<?php

namespace App\Actions\Warehouses\Admin;

use App\Models\Warehouses;

use Lorisleiva\Actions\Concerns\AsAction;

class WareEditView
{
    use AsAction;

    public function handle($id)
    {
        $warehouse = Warehouses::findOrFail($id);
        return view('warehouse.admin.edit', compact('warehouse'));
    }
}
