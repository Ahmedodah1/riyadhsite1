<?php

namespace App\Actions\Bedrooms\Client;

use App\Models\bedroom;
use Lorisleiva\Actions\Concerns\AsAction;

class BedroomClientIndex
{
    use AsAction;

    public function handle()
    {
        $bedrooms = bedroom::query()->get();
        return view('bedroom.client.bathroom', compact('bedrooms'));
    }
}
