<?php

namespace App\Actions\Externalsessions\Client;
use App\Models\Externalsessions;

use Lorisleiva\Actions\Concerns\AsAction;

class ExternalsessionClientAction
{
    use AsAction;

    public function handle()
    {
        $externalsessions = Externalsessions::query()->get();
        return view('externalsession.client.externalsession', compact('externalsessions'));
    }
}
