<?php

namespace App\Actions\Chambers\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class ChamberCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('chamber.admin.create');
    }
}
