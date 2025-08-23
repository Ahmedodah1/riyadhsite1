<?php

namespace App\Actions\SumBooks\Admin;

use App\Models\SumBook;

use Lorisleiva\Actions\Concerns\AsAction;

class SumBookEditView
{
    use AsAction;

    public function handle($id)
    {
        $sumbook = SumBook::findOrFail($id);
        return view('Sumbook.Admin.edit', compact('sumbook'));
    }
}
