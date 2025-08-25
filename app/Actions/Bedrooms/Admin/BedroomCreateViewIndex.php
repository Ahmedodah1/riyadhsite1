<?php

namespace App\Actions\Bedrooms\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class BedroomCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('bedroom.admin.create');
    }
}
