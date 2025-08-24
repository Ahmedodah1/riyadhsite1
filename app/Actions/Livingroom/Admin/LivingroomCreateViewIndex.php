<?php

namespace App\Actions\Livingroom\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class LivingroomCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('livingroom.admin.create');
    }
}
