<?php

namespace App\Actions\Gym\Client\Client;

use App\Models\Gym;
use Lorisleiva\Actions\Concerns\AsAction;

class GymClientAction
{
    use AsAction;

    public function handle()
    {
        $gyms = Gym::query()->get();
        return view('gym.client.gym', compact('gyms'));
    }
}
