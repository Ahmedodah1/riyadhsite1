<?php

namespace App\Actions\Colorphoto\Admin;

use App\Models\Colorphoto;
use Illuminate\Http\Request; // ✅ الصحيح
use Illuminate\Support\Facades\Log;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateAction
{
    use AsAction;

    public function handle(Request $request)
    {
        try {
            $coverPath = null;

            if ($request->hasFile('image')) {
                $coverPath = $request->file('image')->store('images', 'public');
            }

            Colorphoto::create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'image' => $coverPath,
            ]);

            return back()->with('success', 'تم إضافة الكتاب بنجاح');
        } catch (\Exception $e) {
            Log::error('خطأ في إضافة الكتاب: ' . $e->getMessage());
            return back()->with('error', 'حدث خطأ أثناء إضافة الكتاب، يرجى المحاولة مرة أخرى.');
        }
    }
}
