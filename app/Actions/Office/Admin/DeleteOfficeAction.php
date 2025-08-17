<?php

namespace App\Actions\Office\Admin;

use App\Models\Office;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteOfficeAction
{
    use AsAction;

    public function handle(Office $office)
    {
        $office->delete();
        return back();
    }
}
