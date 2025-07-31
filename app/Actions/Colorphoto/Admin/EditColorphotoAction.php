<?php

namespace App\Actions\Colorphoto\Admin;

use App\Models\Colorphoto;
use Illuminate\Http\Request; // ✅ الصحيح
use Illuminate\Support\Facades\Log;
use Lorisleiva\Actions\Concerns\AsAction;

class EditColorphotoAction
{
    use AsAction;

    public function handle(Request $request, Colorphoto $colorphoto)
    {
        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }



        $colorphoto->update($data);

        return redirect()->route('dashboard')->with('success', 'تم تحديث الكتاب بنجاح');
    }
}
