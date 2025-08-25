<?php

namespace App\Actions\Drawers\Admin;

use App\Models\Drawer;
use Lorisleiva\Actions\Concerns\AsAction;

class DiningroomEditView
{
    use AsAction;

    public function handle($id)  // 👈 استقبل الـ id
    {
        $drawer = Drawer::findOrFail($id); // 👈 عنصر واحد فقط
        return view('drawer.admin.edit' , compact('drawer'));
    }

}
