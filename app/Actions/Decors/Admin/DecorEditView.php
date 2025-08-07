<?php

namespace App\Actions\Decors\Admin;

use App\Models\Decor;
use Lorisleiva\Actions\Concerns\AsAction;

class DecorEditView
{
    use AsAction;

    public function handle(Decor $decor)
    {
       return view('Decors.admin.edit' , compact('decor'));
    }
}
