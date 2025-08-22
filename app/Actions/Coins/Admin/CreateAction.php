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
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image',
                'country' => 'required|string|max:255',
                'related_title' => 'nullable|array',
                'related_title.*' => 'nullable|string|max:255',
                'related_image' => 'nullable|array',
                'related_image.*' => 'nullable|image',
            ]);

            // صورة العملة الأساسية
            $imagePath = $request->file('image')
                ? $request->file('image')->store('coins', 'public')
                : null;

            // إنشاء العملة
            $coin = Coin::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imagePath,
                'country' => $request->country,
            ]);

            // العملات المشابهة
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

            return redirect()->route('coins.admin.index')
                ->with('success', 'تم إضافة العملة بنجاح');

        } catch (\Exception $e) {
            Log::error('خطأ في إضافة العملة: ' . $e->getMessage());
            return back()->with('error', 'حدث خطأ أثناء إضافة العملة، يرجى المحاولة مرة أخرى.');
        }
    }
}
