<?php

namespace App\Actions\Kitchens\Admin;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Models\Kitchen;

class KitchenEditViewIndex
{
    use AsAction;

    public function handle($id)
    {
        $kitchen = Kitchen::findOrFail($id);
        return view('kitchen.admin.edit', compact('kitchen'));
    }
}
