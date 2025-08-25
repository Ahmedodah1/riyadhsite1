<?php

namespace App\Actions\Chambers\Admin;

use App\Models\Chambers;
use Lorisleiva\Actions\Concerns\AsAction;

class ChamberEditView
{
    use AsAction;

    public function handle($id)  // 👈 استقبل الـ id
    {
        $chamber = Chambers::findOrFail($id); // 👈 عنصر واحد فقط
        return view('chamber.admin.edit' , compact('chamber'));
    }

}
