<?php

namespace App\Actions\Bedrooms\Admin;
use App\Models\bedroom;

use Lorisleiva\Actions\Concerns\AsAction;

class BedroomAdminIndex
{
    use AsAction;

    public function handle()
    {
        $bedrooms = bedroom::query()->get();
        return view('bedroom.admin.index' , compact('bedrooms'));
    }
}
