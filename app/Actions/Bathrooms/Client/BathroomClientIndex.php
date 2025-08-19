<?php

namespace App\Actions\Bathrooms\Client;

use App\Models\bathroom;
use Lorisleiva\Actions\Concerns\AsAction;

class BathroomClientIndex
{
    use AsAction;

    public function handle()
    {
        $bathrooms = Bathroom::query()->get();
        return view('bathroom.client.bathroom', compact('bathrooms'));
    }
}
