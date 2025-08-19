<?php

namespace App\Actions\Bathrooms\Admin;

use App\Models\bathroom;
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
