<?php

namespace App\Actions\Landscape\Admin;

use App\Models\Landscapes;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteLandscapeAction
{
    use AsAction;

    public function handle(Landscapes $landscape)
    {
        $landscape->delete();
        return back();
    }
}
