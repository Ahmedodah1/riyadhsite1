<?php

namespace App\Actions\WhoUs;

use App\Models\Note;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminWhoUsDeleteAction
{
    use AsAction;

    public function handle(Note $note)
    {
        $note->delete();
        return back();
    }
}
