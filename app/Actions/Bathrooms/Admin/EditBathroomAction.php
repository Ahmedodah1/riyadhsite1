<?php

namespace App\Actions\Bathrooms\Admin;

use App\Models\bathroom;
use Illuminate\Http\Request; // ✅ الصحيح
use Lorisleiva\Actions\Concerns\AsAction;


class EditBathroomAction
{
    use AsAction;

    public function handle(Request $request, Bathroom $bathroom)
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

        $bathroom->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }


}

