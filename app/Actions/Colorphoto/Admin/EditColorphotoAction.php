<?php

namespace App\Actions\Colorphoto\Admin;

use App\Models\Book;
use App\Models\Colorphoto;
use Illuminate\Http\Request; // ✅ الصحيح
use Illuminate\Support\Facades\Log;
use Lorisleiva\Actions\Concerns\AsAction;

class EditColorphotoAction
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
