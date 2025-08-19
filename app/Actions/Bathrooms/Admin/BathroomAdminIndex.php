<?php

namespace App\Actions\Bathrooms\Admin;

use App\Models\Bathroom;
use Lorisleiva\Actions\Concerns\AsAction;

class BathroomAdminIndex
{
    use AsAction;

    public function handle()
    {
        $bathrooms = Bathroom::query()->get();
        return view('bathroom.admin.index' , compact('bathrooms'));
    }
}
