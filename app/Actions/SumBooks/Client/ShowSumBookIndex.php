<?php

namespace App\Actions\SumBooks\Client;

use App\Models\SumBook;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowSumBookIndex
{
    use AsAction;

    // هذه الدالة تستدعي بيانات الملخص
    public function handle($sumbook)
    {
        return $sumbook; // هنا $sumbook سيكون موديل تلقائيًا إذا استخدمت Route Model Binding
    }

    // هذه الدالة ترجع الـ Blade
    public function htmlResponse($sumbook)
    {
        return view('sumbook.show', compact('sumbook'));
    }
}
