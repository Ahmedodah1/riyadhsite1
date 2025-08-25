<?php

namespace App\Actions\Drawers\Client;
use App\Models\Drawer;

use Lorisleiva\Actions\Concerns\AsAction;

class DrawerClientAction
{
    use AsAction;

    public function handle()
    {
        $drawers = Drawer::query()->get();
        return view('drawer.client.drawer', compact('drawers'));
    }
}
