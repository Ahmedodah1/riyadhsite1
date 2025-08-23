<?php

namespace App\Actions\WhoUs;

use App\Models\Note;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateNotesAction
{
    use AsAction;

    public function handle(Request $request, Note $note)
    {
        $data = [
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $note->update($data);

        return back()->with('success', 'تم إرسال البيانات بنجاح');
    }


    public function viewForm(Note $note) {
        return view('WhoUs.admin.update', compact('note'));
    }
}
