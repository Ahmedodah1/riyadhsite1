<?php

namespace App\Actions\Colorphoto\Admin;

use App\Models\Colorphoto;
use Lorisleiva\Actions\Concerns\AsAction;

class ColorphotoAdminindex
{
    use AsAction;

    public function handle()
    {
        $colorphotos = Colorphoto::query()->get();
        return view('colorphoto.admin.index', compact('colorphotos'));
    }
}
