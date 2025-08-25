<?php

namespace App\Actions\Bedrooms\Admin;

use App\Models\bedroom;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteBedroomAction
{
    use AsAction;

    public function handle(bedroom $bedroom)
    {
        $bedroom->delete();
        return back();
    }
}
