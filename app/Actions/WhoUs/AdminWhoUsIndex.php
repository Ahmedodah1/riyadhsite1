<?php

namespace App\Actions\WhoUs;

use App\Models\Note;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminWhoUsIndex
{
    use AsAction;

    public function handle()
    {
        $notes = Note::query()->get();
        return view('WhoUs.Admin.index', compact('notes'));
    }
}
