<?php

namespace App\Actions\Laundryroom\Admin;

use App\Models\Laundryroom;

use Lorisleiva\Actions\Concerns\AsAction;

class LaundryEditView
{
    use AsAction;

    public function handle($id)
    {
        $laundryroom = Laundryroom::findOrFail($id);
        return view('laundryroom.admin.edit', compact('laundryroom'));
    }
}
