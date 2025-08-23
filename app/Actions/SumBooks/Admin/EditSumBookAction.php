<?php

namespace App\Actions\SumBooks\Admin;
use Illuminate\Http\Request; // ✅ الصحيح
use App\Models\SumBook;

use Lorisleiva\Actions\Concerns\AsAction;

class EditSumBookAction
{
    use AsAction;

    public function handle(Request $request, SumBook $sumbook)
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

        $sumbook->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }


}
