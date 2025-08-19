<?php

namespace App\Actions\Diningroom\Admin;

use App\Models\Diningroom;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteDiningroomAction
{
    use AsAction;

    public function handle(Diningroom $diningroom)
    {
        $diningroom->delete();
        return back();
    }
}
