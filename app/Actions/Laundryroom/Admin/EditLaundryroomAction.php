<?php

namespace App\Actions\Laundryroom\Admin;
use Illuminate\Http\Request; // ✅ الصحيح
use App\Models\Laundryroom;

use Lorisleiva\Actions\Concerns\AsAction;

class EditLaundryroomAction
{
    use AsAction;

    public function handle(Request $request, Laundryroom $laundryroom)
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

        $laundryroom->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }


}
