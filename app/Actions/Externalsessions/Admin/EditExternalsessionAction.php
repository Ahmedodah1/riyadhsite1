<?php

namespace App\Actions\Externalsessions\Admin;
use Illuminate\Http\Request; // ✅ الصحيح
use App\Models\Externalsessions;

use Lorisleiva\Actions\Concerns\AsAction;

class EditExternalsessionAction
{
    use AsAction;

    public function handle(Request $request, Externalsessions $externalsession)
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

        $externalsession->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }


}
