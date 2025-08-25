<?php

namespace App\Actions\Terrace\Admin;

use App\Models\Terraces;
use Illuminate\Http\Request; // ✅ الصحيح
use Lorisleiva\Actions\Concerns\AsAction;

class EditTerraceAction
{
    use AsAction;

    public function handle(Request $request, Terraces $terrace)
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

        $terrace->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }

}
