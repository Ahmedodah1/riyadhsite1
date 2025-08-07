<?php

namespace App\Actions\Decors\Admin;

use App\Models\Decor;
use Lorisleiva\Actions\Concerns\AsAction;

class DecorAdminIndex
{
    use AsAction;

    public function handle()
    {
        $decors = Decor::query()->get();
       return view('Decors.admin.index' , compact('decors'));
    }
}
