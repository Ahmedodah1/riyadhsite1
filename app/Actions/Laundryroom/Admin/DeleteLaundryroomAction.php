<?php

namespace App\Actions\Laundryroom\Admin;

use App\Models\Laundryroom;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteLaundryroomAction
{
    use AsAction;

    public function handle(Laundryroom $laundryroom)
    {
        $laundryroom->delete();
        return back();
    }
}
