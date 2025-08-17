<?php

namespace App\Actions\Pools\Admin;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Models\Pool;

class DeletePoolAction
{
    use AsAction;

    public function handle(Pool $pool)
    {
        $pool->delete();
        return back();
    }
}
