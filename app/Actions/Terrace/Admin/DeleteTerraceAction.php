<?php

namespace App\Actions\Terrace\Admin;

use App\Models\Terraces;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteTerraceAction
{
    use AsAction;

    public function handle(Terraces $terrace)
    {
        $terrace->delete();
        return back();
    }
}
