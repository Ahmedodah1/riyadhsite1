<?php

namespace App\Actions\Kitchens\Client;
use App\Models\kitchen;

use Lorisleiva\Actions\Concerns\AsAction;

class KitchenClientIndex
{
    use AsAction;

    public function handle()
    {
        $Kitchens = Kitchen::query()->get();
        return view('kitchen.client.kitchen', compact('Kitchens'));
    }
}
