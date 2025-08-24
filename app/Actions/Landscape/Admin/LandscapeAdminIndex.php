<?php

namespace App\Actions\Landscape\Admin;
use App\Models\Landscapes;

use Lorisleiva\Actions\Concerns\AsAction;

class LandscapeAdminIndex
{
    use AsAction;

    public function handle()
    {
        $landscapes = Landscapes::query()->get();
        return view('Landscape.admin.index' , compact('landscapes'));
    }
}
