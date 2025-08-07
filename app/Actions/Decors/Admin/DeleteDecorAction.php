<?php

namespace App\Actions\Decors\Admin;

use App\Models\Decor;
use Lorisleiva\Actions\Concerns\AsAction;
use function Pest\Laravel\delete;

class DeleteDecorAction
{
    use AsAction;

    public function handle(Decor $Decor)
    {
       $Decor->delete();
    }
}
