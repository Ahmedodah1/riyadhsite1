<?php

namespace App\Actions\Pools\Client;

use App\Models\Pool;
use Lorisleiva\Actions\Concerns\AsAction;

class PoolClientIndex
{
    use AsAction;

    public function handle()
    {
        $pools = Pool::query()->get();
        return view('pool.client.pool', compact('pools'));
    }
}
