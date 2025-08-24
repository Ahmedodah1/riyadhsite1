<?php

namespace App\Actions\Livingroom\Admin;

use App\Models\Livingroom;
use Lorisleiva\Actions\Concerns\AsAction;

class LivingroomAdminIndex
{
    use AsAction;

    public function handle()
    {
        $livingrooms = Livingroom::query()->get();
        return view('laundryroom.admin.index' , compact('livingrooms'));
    }
}
