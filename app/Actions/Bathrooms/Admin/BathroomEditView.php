<?php

namespace App\Actions\Bathrooms\Admin;

use App\Models\bathroom;
use Lorisleiva\Actions\Concerns\AsAction;

class BathroomEditView
{
    use AsAction;

    public function handle($id)
    {
        $bathroom = Bathroom::findOrFail($id);
        return view('bathroom.admin.edit', compact('bathroom'));
    }
}
