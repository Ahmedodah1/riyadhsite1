<?php

namespace App\Actions\Drawers\Admin;

use App\Models\Drawer;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteDrawerAction
{
    use AsAction;

    public function handle(Drawer $drawer)
    {
        $drawer->delete();
        return back();
    }
}
