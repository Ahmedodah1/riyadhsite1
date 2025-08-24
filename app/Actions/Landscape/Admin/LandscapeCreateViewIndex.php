<?php

namespace App\Actions\Landscape\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class LandscapeCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('Landscape.admin.create');
    }
}
