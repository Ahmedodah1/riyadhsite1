<?php

namespace App\Actions\Externalsessions\Admin;
use App\Models\Externalsessions;

use Lorisleiva\Actions\Concerns\AsAction;

class ExternalsessionsAdminIndex
{
    use AsAction;

    public function handle()
    {
        $externalsessions = Externalsessions::query()->get();
        return view('externalsession.admin.index' , compact('externalsessions'));
    }
}
