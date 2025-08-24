<?php

namespace App\Actions\Externalsessions\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class ExternalsessionCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('externalsession.admin.create');
    }
}
