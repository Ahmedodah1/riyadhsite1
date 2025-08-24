<?php

namespace App\Actions\Externalsessions\Admin;

use App\Models\Externalsessions;

use Lorisleiva\Actions\Concerns\AsAction;

class ExternalEditView
{
    use AsAction;

    public function handle($id)
    {
        $externalsession = Externalsessions::findOrFail($id);
        return view('externalsession.admin.edit', compact('externalsession'));
    }
}
