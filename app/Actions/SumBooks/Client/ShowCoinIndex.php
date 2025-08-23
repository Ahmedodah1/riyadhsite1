<?php

namespace App\Actions\SumBooks\Client;

use App\Models\SumBook;
use Lorisleiva\Actions\Concerns\AsAction;

class SumBookShowAction
{
    use AsAction;

    // إذا تريد تمرير الـ id من الرابط
    public function handle($id)
    {
        $sumbook = SumBook::findOrFail($id);
        return view('sumbook.show', compact('sumbook')); // صفحة A4
    }

    // تفعيل كـ route مباشرة
    public function asController($id)
    {
        return $this->handle($id);
    }
}
