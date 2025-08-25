<?php

namespace App\Actions\Drawers\Admin;

use App\Models\Drawer;
use Illuminate\Http\Request; // ✅ الصحيح
use Lorisleiva\Actions\Concerns\AsAction;

class EditDrawerAction
{
    use AsAction;

    public function handle(Request $request, Drawer $drawer)
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

        $drawer->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }

}
