<?php

namespace App\Actions\Livingroom\Admin;

use App\Models\Livingroom;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteLivingroomAction
{
    use AsAction;

    public function handle(Livingroom $livingroom)
    {
        $livingroom->delete();
        return back();
    }
}
