<?php

namespace App\Actions\Kitchens\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class KitchenCreateViewIndex
{
    use AsAction;

    public function handle()
    {
return view('kitchen.admin.create');
    }
}
