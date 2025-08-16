<?php

namespace App\Actions\Kitchens\Admin;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Models\Kitchen;

class KitchenAdminIndex
{
    use AsAction;

    public function handle()
    {
        $kitchens = Kitchen::query()->get();
        return view('kitchen.admin.index' , compact('kitchens'));
    }
}
