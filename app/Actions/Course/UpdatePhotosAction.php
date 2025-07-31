<?php

namespace App\Actions\BlackAndWhite;

use App\Models\BlackAndWhite;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use function Pest\Laravel\get;

class UpdatePhotosAction
{
    use AsAction;

    public function handle(Request $request,BlackAndWhite $blackAndWhite)
    {

        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $blackAndWhite->update($data);

        return back()->with('success', 'تم إرسال البيانات بنجاح');

    }
}
