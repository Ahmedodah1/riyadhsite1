<?php

namespace App\Actions\Drawers\Admin;
use App\Models\Drawer;

use Lorisleiva\Actions\Concerns\AsAction;

class DrawerAdminIndex
{
    use AsAction;

    public function handle()
    {
        $drawers = Drawer::query()->get();
        return view('drawer.admin.index' , compact('drawers'));
    }
}
