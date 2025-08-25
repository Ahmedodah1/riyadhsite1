<?php

namespace App\Actions\Bedrooms\Admin;

use App\Models\bedroom;
use Illuminate\Http\Request; // ✅ الصحيح
use Lorisleiva\Actions\Concerns\AsAction;


class EditBedroomAction
{
    use AsAction;

    public function handle(Request $request, bedroom $bedroom)
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

        $bedroom->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }


}

