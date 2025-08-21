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
            'country' => 'required|string|max:255',
            'related' => 'nullable|array',
            'related.*' => 'integer|exists:coins,id',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'country' => $request->country,
            'related' => json_encode($request->related ?? []), // تحويل array إلى JSON
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
