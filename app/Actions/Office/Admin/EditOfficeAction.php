<?php

namespace App\Actions\Office\Admin;
use Illuminate\Http\Request; // ✅ الصحيح
use App\Models\Office;

use Lorisleiva\Actions\Concerns\AsAction;

class EditOfficeAction
{
    use AsAction;

    public function handle(Request $request, Office $office)
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

        $office->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }


}
