<?php

namespace App\Actions\Drawers\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class DrawerCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('drawer.admin.create');
    }
}
