<?php

namespace App\Actions\Landscape\Admin;

use App\Models\Landscapes;

use Lorisleiva\Actions\Concerns\AsAction;

class LandscapeEditView
{
    use AsAction;

    public function handle($id)
    {
        $landscape = Landscapes::findOrFail($id);
        return view('Landscape.admin.edit', compact('landscape'));
    }
}
