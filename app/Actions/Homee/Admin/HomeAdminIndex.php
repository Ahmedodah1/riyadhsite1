<?php

namespace App\Actions\Homee\Admin;

use App\Models\Externalsessions;
use Lorisleiva\Actions\Concerns\AsAction;

class HomeAdminIndex
{
    use AsAction;

    public function handle()
    {
        $homees = Externalsessions::query()->get();
        return view('homee.admin.index' , compact('homees'));
    }
}
