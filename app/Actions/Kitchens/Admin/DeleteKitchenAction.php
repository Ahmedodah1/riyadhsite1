<?php

namespace App\Actions\Kitchens\Admin;

use App\Models\Kitchen;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteKitchenAction
{
    use AsAction;
    public function handle(Kitchen $kitchen)
    {
        $kitchen->delete();
        return back();
    }
}
