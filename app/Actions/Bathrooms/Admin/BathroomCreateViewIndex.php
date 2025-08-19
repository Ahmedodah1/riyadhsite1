<?php

namespace App\Actions\Bathrooms\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class BathroomCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('bathroom.admin.create');
    }
}
