<?php

namespace App\Actions\WhoUs;

use App\Models\Note;
use Lorisleiva\Actions\Concerns\AsAction;

class WhoUsAction
{
    use AsAction;

    public function handle()
    {
        $notes = Note::query()->find(19);
        return view('WhoUs.whoous', compact('notes'));
    }
}
