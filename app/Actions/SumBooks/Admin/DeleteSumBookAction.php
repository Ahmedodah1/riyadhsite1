<?php

namespace App\Actions\SumBooks\Admin;

use App\Models\SumBook;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteSumBookAction
{
    use AsAction;

    public function handle(SumBook $sumbook)
    {
        $sumbook->delete();
        return back();
    }
}
