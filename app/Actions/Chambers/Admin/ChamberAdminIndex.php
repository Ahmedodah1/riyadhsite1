<?php

namespace App\Actions\Chambers\Admin;
use App\Models\Chambers;

use Lorisleiva\Actions\Concerns\AsAction;

class ChamberAdminIndex
{
    use AsAction;

    public function handle()
    {
        $chambers = Chambers::query()->get();
        return view('chamber.admin.index' , compact('chambers'));
    }
}
