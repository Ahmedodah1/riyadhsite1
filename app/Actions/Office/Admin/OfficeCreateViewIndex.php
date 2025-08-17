<?php

namespace App\Actions\Office\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class OfficeCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('office.admin.create');
    }
}
