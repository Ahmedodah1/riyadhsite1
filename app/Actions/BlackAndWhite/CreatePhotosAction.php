<?php

namespace App\Actions\BlackAndWhite;

use App\Models\BlackAndWhite;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Log;

class CreatePhotosAction
{
    use AsAction;

    public function handle(Request $request)
    {
        try {
            $coverPath = null;

            if ($request->hasFile('image')) {
                $coverPath = $request->file('image')->store('images', 'public');
            }

            BlackAndWhite::query()->create([
                'image' => $coverPath,
                'title' => $request->get('title'),
                'description' => $request->get('description'),
            ]);

            // إعادة التوجيه مع إشعار نجاح
            return back()->with('success', 'تم حفظ الصورة بنجاح');

        } catch (\Exception $e) {
            // تسجيل الخطأ (اختياري)
            Log::error('خطأ في حفظ الصورة: '.$e->getMessage());

            // إعادة التوجيه مع إشعار خطأ
            return back()->with('error', 'حدث خطأ أثناء حفظ الصورة، يرجى المحاولة مرة أخرى.');
        }
    }
}
