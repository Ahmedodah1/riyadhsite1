<?php

namespace App\Actions\Terrace\Admin;

use App\Models\Terraces;
use Lorisleiva\Actions\Concerns\AsAction;

class TerraceEditView
{
    use AsAction;

    public function handle($id)  // 👈 استقبل الـ id
    {
        $terrace = Terraces::findOrFail($id); // 👈 عنصر واحد فقط
        return view('terrace.admin.edit' , compact('terrace'));
    }

}
