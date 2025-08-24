<?php

namespace App\Actions\Warehouses\Admin;
use Illuminate\Http\Request; // ✅ الصحيح
use App\Models\Warehouses;

use Lorisleiva\Actions\Concerns\AsAction;

class EditWareHouseAction
{
    use AsAction;

    public function handle(Request $request, Warehouses $warehouses)
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

        $warehouses->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }


}
