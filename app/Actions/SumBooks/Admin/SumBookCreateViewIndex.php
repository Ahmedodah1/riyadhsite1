<?php

namespace App\Actions\SumBooks\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class SumBookCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('Sumbook.aAmin.create');
    }
}
