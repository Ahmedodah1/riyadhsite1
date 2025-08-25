<?php

namespace App\Actions\Gym\Admin;

use App\Models\Gym;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteGymAction
{
    use AsAction;

    public function handle(Gym $gym)
    {
        $gym->delete();
        return back();
    }
}
