<?php

namespace App\Actions\Diningroom\Admin;

use App\Models\Diningroom;
use Illuminate\Http\Request; // ✅ الصحيح
use Lorisleiva\Actions\Concerns\AsAction;

class EditDiningroomAction
{
    use AsAction;

    public function handle(Request $request, Diningroom $diningroom)
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

        $diningroom->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }

}
