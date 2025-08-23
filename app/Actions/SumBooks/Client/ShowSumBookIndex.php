<?php

namespace App\Actions\SumBooks\Client;

use App\Models\SumBook;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowSumBookIndex
{
    use AsAction;

    // Route Model Binding يحول $sumbook تلقائيًا إلى موديل SumBook
    public function handle(SumBook $sumbook)
    {
        return $sumbook;
    }

    // إرجاع الـ Blade مع البيانات
    public function htmlResponse(SumBook $sumbook)
    {
        return view('sumbook.client.show', compact('sumbook'));
    }
}
