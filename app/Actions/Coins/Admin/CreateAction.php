<?php

namespace App\Actions\Coins\Admin;

use App\Models\Coin;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Log;

class CreateAction
{
    use AsAction;

    public function handle(Request $request)
    {
        // تحقق من البيانات قبل محاولة الحفظ
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'country' => 'required|string|max:255',
            'related_title' => 'nullable|array',
            'related_title.*' => 'nullable|string|max:255',
            'related_image' => 'nullable|array',
            'related_image.*' => 'nullable|image',
        ]);

        try {
            // صورة العملة الأساسية
            $imagePath = $request->file('image')
                ? $request->file('image')->store('coins', 'public')
                : null;

            // إنشاء العملة
            $coin = Coin::create([
                'title' => $validated['title'],
                'description' => $validated['description'] ?? null,
                'image' => $imagePath,
                'country' => $validated['country'],
            ]);

            // العملات المشابهة
            if (!empty($validated['related_title'])) {
                foreach ($validated['related_title'] as $index => $relatedTitle) {
                    if (!empty($relatedTitle)) {
                        $relatedImage = isset($validated['related_image'][$index]) && $validated['related_image'][$index]
                            ? $validated['related_image'][$index]->store('coins/related', 'public')
                            : null;

                        $coin->relatedCoins()->create([
                            'title' => $relatedTitle,
                            'image' => $relatedImage,
                        ]);
                    }
                }
            }

            return redirect()->route('coins.admin.index')
                ->with('success', 'تم إضافة العملة بنجاح');

        } catch (\Exception $e) {
            // تسجيل الخطأ فقط، ولا يظهر رسالة للمستخدم إلا إذا كان خطأ فعلي
            Log::error('خطأ في إضافة العملة: ' . $e->getMessage());
            return back()->with('error', 'حدث خطأ أثناء إضافة العملة، يرجى المحاولة مرة أخرى.');
        }
    }
}
