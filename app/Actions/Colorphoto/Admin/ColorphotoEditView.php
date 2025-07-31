<?php

namespace App\Actions\Colorphoto\Admin;

use App\Models\Colorphoto;
use Lorisleiva\Actions\Concerns\AsAction;

class ColorphotoEditView
{
    use AsAction;

    public function handle($id)  // 👈 استقبل الـ id
    {
        $colorphoto = Colorphoto::findOrFail($id); // 👈 عنصر واحد فقط
        return view('colorphoto.admin.edit', compact('colorphoto'));
    }
}
