<?php

namespace App\Actions\Diningroom\Admin;

use App\Models\Diningroom;
use Lorisleiva\Actions\Concerns\AsAction;

class DiningroomAdminIndex
{
    use AsAction;

    public function handle()
    {
        $diningrooms = Diningroom::query()->get();
        return view('diningroom.admin.index' , compact('diningrooms'));
    }
}
