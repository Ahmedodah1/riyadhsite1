<?php

namespace App\Actions\Office\Admin;

use App\Models\Office;

use Lorisleiva\Actions\Concerns\AsAction;

class OfficeEditView
{
    use AsAction;

    public function handle($id)
    {
        $office = Office::findOrFail($id);
        return view('office.admin.edit', compact('office'));
    }
}
