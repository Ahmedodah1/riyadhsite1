<?php

namespace App\Actions\Bedrooms\Admin;

use App\Models\bedroom;
use Lorisleiva\Actions\Concerns\AsAction;

class BedroomEditView
{
    use AsAction;

    public function handle($id)
    {
        $bedroom = bedroom::findOrFail($id);
        return view('bedroom.admin.edit', compact('bedroom'));
    }
}
