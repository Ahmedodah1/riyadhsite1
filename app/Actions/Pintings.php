<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class Pintings
{
    use AsAction;

    public function handle()
    {

        return view('paintings.paintings');

    }
}
