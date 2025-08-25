<?php

namespace App\Actions\Terrace\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class TerraceCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('terrace.admin.create');
    }
}
