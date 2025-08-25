<?php

namespace App\Actions\Gym\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class GymCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('gym.admin.create');
    }
}
