<?php

namespace App\Actions\Pools\Admin;
use Illuminate\Http\Request;
use App\Models\Pool;
use Lorisleiva\Actions\Concerns\AsAction;

class EditPoolAction
{
    use AsAction;

    public function handle(Request $request, Pool $pool)
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

        $pool->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }

}
