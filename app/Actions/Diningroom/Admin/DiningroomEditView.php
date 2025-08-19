<?php

namespace App\Actions\Diningroom\Admin;

use App\Models\Diningroom;
use Lorisleiva\Actions\Concerns\AsAction;

class DiningroomEditView
{
    use AsAction;

    public function handle($id)  // 👈 استقبل الـ id
    {
        $diningroom = Diningroom::findOrFail($id); // 👈 عنصر واحد فقط
        return view('diningroom.admin.edit' , compact('diningroom'));
    }

}
