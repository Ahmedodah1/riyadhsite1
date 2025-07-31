<?php

namespace App\Actions\BlackAndWhite;

use App\Models\BlackAndWhite;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use function Pest\Laravel\get;

class UpdateViewPhotosAction
{
    use AsAction;

    public function handle(BlackAndWhite $blackAndWhite)
    {

      return view('blackAndWhite.edit', compact('blackAndWhite'));
    }
}
