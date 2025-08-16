<?php

namespace App\Actions\Kitchens\Client;
use App\Models\Kitchen; // ✅ استدعاء الموديل الصحيح


use Lorisleiva\Actions\Concerns\AsAction;

class KitchenClientIndex
{
    use AsAction;

    public function handle()
    {
        $kitchens = Kitchen::query()->get();
        return view('kitchen.client.kitchen', compact('kitchens'));
    }
}
