<?php

namespace App\Actions\Laundryroom\Client;

use App\Models\Laundryroom;
use Lorisleiva\Actions\Concerns\AsAction;

class LaundruroomClientAction
{
    use AsAction;

    public function handle()
    {
        $laundryrooms = Laundryroom::query()->get();
        return view('laundryroom.client.office', compact('laundryrooms'));
    }
}
