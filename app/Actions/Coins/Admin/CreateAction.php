<?php

namespace App\Actions\Coins\Admin;

use App\Models\Coin;
use App\Models\RelatedCoin;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Log;

class CreateAction
{
    use AsAction;

    public function handle(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image',
                'country' => 'required|string|max:255',
                'related_title.*' => 'nullable|string|max:255',
                'related_image.*' => 'nullable|image',
            ]);

            // حفظ صورة العملة الرئيسية
            $imagePath = $request->hasFile('image') ? $request->file('image')->store('coins', 'public') : null;

            // إنشاء العملة الرئيسية
            $coin = Coin::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imagePath,
                'country' => $request->country,
            ]);

            // حفظ العملات المشابهة
            if ($request->has('related_title')) {
                foreach ($request->related_title as $index => $relatedTitle) {
                    if (!empty($relatedTitle)) {
                        $relatedImage = isset($request->related_image[$index]) && $request->related_image[$index]
                            ? $request->related_image[$index]->store('coins/related', 'public')
                            : null;

                        $coin->relatedCoins()->create([
                            'title' => $relatedTitle,
                            'image' => $relatedImage,
                        ]);
                    }
                }
            }

            return back()->with('success', 'تم إضافة العملة بنجاح');

        } catch (\Exception $e) {
            Log::error('خطأ في إضافة العملة: ' . $e->getMessage());
            return back()->with('error', 'حدث خطأ أثناء إضافة العملة، يرجى المحاولة مرة أخرى.');
        }
    }
}
