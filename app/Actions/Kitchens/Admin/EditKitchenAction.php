<?php

namespace App\Actions\Kitchens\Admin;
use Illuminate\Http\Request;
use App\Models\Kitchen;
use Lorisleiva\Actions\Concerns\AsAction;

class EditKitchenAction
{
    use AsAction;

    public function handle(Request $request, Kitchen $kitchen)
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

        $kitchen->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }

}
