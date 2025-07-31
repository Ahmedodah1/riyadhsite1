<?php

namespace App\Actions\Colorphoto\Admin;

use App\Models\Colorphoto;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteColorphotoAction
{
    use AsAction;

    public function handle(Colorphoto $colorphoto)
    {
       $colorphoto->delete();
        return back();
    }
}
