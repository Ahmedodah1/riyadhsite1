<?php

namespace App\Actions\Landscape\Admin;
use Illuminate\Http\Request; // ✅ الصحيح
use App\Models\Landscapes;

use Lorisleiva\Actions\Concerns\AsAction;

class EditLandscapeAction
{
    use AsAction;

    public function handle(Request $request, Landscapes $Landscape)
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

        $Landscape->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }


}
