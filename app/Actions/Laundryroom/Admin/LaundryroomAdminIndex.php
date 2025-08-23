<?php

namespace App\Actions\Laundryroom\Admin;

use App\Models\Laundryroom;
use Lorisleiva\Actions\Concerns\AsAction;

class LaundryroomAdminIndex
{
    use AsAction;

    public function handle()
    {
        $laundryrooms = Laundryroom::query()->get();
        return view('laundryroom.admin.index' , compact('laundryrooms'));
    }
}
