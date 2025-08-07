<?php

namespace App\Actions\Decors\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class DecorCreateViewIndex
{
    use AsAction;

    public function handle()
    {
       return view('Decors.admin.create');
    }
}
