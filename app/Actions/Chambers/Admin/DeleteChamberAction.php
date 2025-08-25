<?php

namespace App\Actions\Chambers\Admin;

use App\Models\Chambers;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteChamberAction
{
    use AsAction;

    public function handle(Chambers $chamber)
    {
        $chamber->delete();
        return back();
    }
}
