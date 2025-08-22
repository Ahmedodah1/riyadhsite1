<?php

namespace App\Actions\Coins\Admin;

use App\Models\Coin;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Log;

class EditCoinAction
{
    use AsAction;

    public function handle(Request $request, Coin $coin)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'country' => 'required|string|max:255', // ✨ إضافة الدولة
        ]);

        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'country' => $request->get('country'), // ✨ تحديث الدولة
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('coins', 'public');
        }

        try {
            $coin->update($data);
            return redirect()->route('dashboard')->with('success', 'تم تحديث العملة بنجاح');
        } catch (\Exception $e) {
            Log::error('خطأ أثناء تحديث العملة: ' . $e->getMessage());
            return back()->with('error', 'حدث خطأ أثناء التحديث، يرجى المحاولة مرة أخرى.');
        }
    }
}
