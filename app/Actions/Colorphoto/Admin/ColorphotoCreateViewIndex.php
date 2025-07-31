<?php

namespace App\Actions\Colorphoto\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class ColorphotoCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('colorphoto.admin.create');
    }
}
