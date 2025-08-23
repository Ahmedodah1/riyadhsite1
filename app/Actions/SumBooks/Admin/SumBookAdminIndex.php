<?php

namespace App\Actions\SumBooks\Admin;

use App\Models\SumBook;
use Lorisleiva\Actions\Concerns\AsAction;

class SumBookAdminIndex
{
    use AsAction;

    public function handle()
    {
        $sumbook = SumBook::query()->get();
        return view('SumBooks.admin.index' , compact('sumbook'));
    }
}
