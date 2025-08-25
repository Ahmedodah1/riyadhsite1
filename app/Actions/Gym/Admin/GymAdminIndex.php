<?php

namespace App\Actions\Gym\Admin;
use App\Models\Gym;

use Lorisleiva\Actions\Concerns\AsAction;

class GymAdminIndex
{
    use AsAction;

    public function handle()
    {
        $gyms = Gym::query()->get();
        return view('gym.admin.index' , compact('gyms'));
    }
}
