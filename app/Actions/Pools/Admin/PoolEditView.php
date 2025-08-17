<?php

namespace App\Actions\Pools\Admin;
use App\Models\Kitchen;
use App\Models\Pool;

use Lorisleiva\Actions\Concerns\AsAction;

class PoolEditView
{
    use AsAction;

    public function handle($id)
    {
        $pool = Pool::findOrFail($id);
        return view('pool.admin.edit', compact('pool'));
    }
}
