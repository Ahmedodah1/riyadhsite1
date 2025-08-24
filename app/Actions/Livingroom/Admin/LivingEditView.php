<?php

namespace App\Actions\Livingroom\Admin;

use App\Models\Livingroom;

use Lorisleiva\Actions\Concerns\AsAction;

class LivingEditView
{
    use AsAction;

    public function handle($id)
    {
        $livingroom = Livingroom::findOrFail($id);
        return view('livingroom.admin.edit', compact('livingroom'));
    }
}
