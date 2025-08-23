<?php

namespace App\Actions\Laundryroom\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class LaundryroomCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('laundryroom.admin.create');
    }
}
