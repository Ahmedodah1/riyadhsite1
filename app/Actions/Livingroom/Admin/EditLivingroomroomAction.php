<?php

namespace App\Actions\Livingroom\Admin;
use Illuminate\Http\Request; // ✅ الصحيح
use App\Models\Livingroom;

use Lorisleiva\Actions\Concerns\AsAction;

class EditLivingroomroomAction
{
    use AsAction;

    public function handle(Request $request, Livingroom $livingroom)
    {
        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('cover_url')) {
            $data['cover_url'] = $request->file('cover_url')->store('pdfs', 'public');
        }

        $livingroom->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }


}
