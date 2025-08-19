<?php

namespace App\Actions\Diningroom\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class DiningroomCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('diningroom.admin.create');
    }
}
