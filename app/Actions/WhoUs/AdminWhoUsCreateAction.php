<?php

namespace App\Actions\WhoUs;

use Lorisleiva\Actions\Concerns\AsAction;

class AdminWhoUsCreateAction
{
    use AsAction;

    public function handle()
    {
        return view('WhoUs.Admin.create');
    }
}
