<?php

namespace App\Actions\BlackAndWhite;

use App\Models\BlackAndWhite;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use function Pest\Laravel\get;

class CreateViewPhotosAction
{
    use AsAction;

    public function handle()
    {

      return view('BlackAndWhite.create');
    }
}
