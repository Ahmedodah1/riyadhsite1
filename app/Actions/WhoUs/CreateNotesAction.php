<?php

namespace App\Actions\WhoUs;

use App\Models\Note;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateNotesAction
{
    use AsAction;

    public function handle(Request $request)
    {
        $coverPath = null;

        if ($request->hasFile('image')) {
            $coverPath = $request->file('image')->store('images', 'public');
        }

        Note::create([
            'image' => $coverPath,
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);

        return redirect()->back()->with('success', 'تم إرسال البيانات بنجاح!');
    }
}
