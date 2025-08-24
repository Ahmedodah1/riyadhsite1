<?php

namespace App\Actions\Warehouses\Admin;

use App\Models\Warehouses;

use Lorisleiva\Actions\Concerns\AsAction;

class WareEditView
{
    use AsAction;

    public function handle($id)
    {
        $warehouses = Warehouses::findOrFail($id);
        return view('warehouses.admin.edit', compact('warehouses'));
    }
}
