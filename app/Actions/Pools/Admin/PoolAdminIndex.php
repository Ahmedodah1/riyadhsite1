<?php

namespace App\Actions\Pools\Admin;
use App\Models\Pool;

use Lorisleiva\Actions\Concerns\AsAction;

class PoolAdminIndex
{
    use AsAction;

    public function handle()
    {
        $pools = Pool::query()->get();
        return view('pool.admin.index' , compact('pools'));
    }
}
