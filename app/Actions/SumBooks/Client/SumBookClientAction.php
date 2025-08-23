<?php

namespace App\Actions\SumBooks\Client;

use App\Models\SumBook;
use Lorisleiva\Actions\Concerns\AsAction;

class SumBookClientAction
{
    use AsAction;

    public function handle()
    {
        $sumbooks = SumBook::query()->get();
        return view('Sumbook.client.Sumbook', compact('sumbooks'));
    }
}
