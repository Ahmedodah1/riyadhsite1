<?php

namespace App\Actions\BlackAndWhite;

use App\Models\BlackAndWhite;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminBlackAndWhiteDeleteAction
{
    use AsAction;

    public function handle(BlackAndWhite $blackAndWhite)
    {
        $blackAndWhite->delete();
        return back();
    }
}
