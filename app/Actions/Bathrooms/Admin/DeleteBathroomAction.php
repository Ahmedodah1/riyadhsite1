<?php

namespace App\Actions\Bathrooms\Admin;

use App\Models\bathroom;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteBathroomAction
{
    use AsAction;

    public function handle(Bathroom $bathroom)
    {
        $bathroom->delete();
        return back();
    }
}
