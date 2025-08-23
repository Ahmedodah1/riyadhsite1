<?php

namespace App\Actions\SumBooks\Admin;
use App\Actions\Office\Admin\Log;
use Illuminate\Http\Request; // ✅ الصحيح
use App\Models\SumBook;

use Lorisleiva\Actions\Concerns\AsAction;

class CreateAction
{
    use AsAction;

    public function handle(Request $request)
    {
        try {
            $coverPath = null;
            $pdfPath = null;

            if ($request->hasFile('image')) {
                $coverPath = $request->file('image')->store('images', 'public');
            }

            if ($request->hasFile('cover_url')) {
                $pdfPath = $request->file('cover_url')->store('pdfs', 'public');
            }

            SumBook::create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'image' => $coverPath,
                'cover_url' => $pdfPath,
            ]);

            return back()->with('success', 'تم إضافة الكتاب بنجاح');

        } catch (\Exception $e) {
            Log::error('خطأ في إضافة الكتاب: ' . $e->getMessage());

            return back()->with('error', 'حدث خطأ أثناء إضافة الكتاب، يرجى المحاولة مرة أخرى.');
        }
    }
}
