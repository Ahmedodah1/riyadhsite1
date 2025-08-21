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
                'country' => 'required|string|max:255', // ✨ إضافة الدولة
            ]);

            $imagePath = null;

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('coins', 'public');
            }

            Coin::create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'image' => $imagePath,
                'country' => $request->get('country'), // ✨ حفظ الدولة
            ]);

            return back()->with('success', 'تم إضافة العملة بنجاح');

        } catch (\Exception $e) {
            Log::error('خطأ في إضافة العملة: ' . $e->getMessage());

            return back()->with('error', 'حدث خطأ أثناء إضافة العملة، يرجى المحاولة مرة أخرى.');
        }
    }
}
