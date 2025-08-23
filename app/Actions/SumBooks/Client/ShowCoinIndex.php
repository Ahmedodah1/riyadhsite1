<?php

namespace App\Actions\SumBooks\Client;

use App\Models\SumBook;
use Lorisleiva\Actions\Concerns\AsAction;

class SumBookShowAction
{
    use AsAction;

    public function handle($id)
    {
        return SumBook::findOrFail($id);
    }

    public function htmlResponse($sumbook)
    {
        return view('sumbook.show', compact('sumbook'));
    }
}
