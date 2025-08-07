<?php

namespace App\Actions\Decors\Admin;

use App\Models\Decor;
use Illuminate\Http\Request;

use Lorisleiva\Actions\Concerns\AsAction;

class EditDecorAction
{
    use AsAction;

    public function handle(Request $request, Decor $decor)
    {
        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }



        $decor->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }
}
