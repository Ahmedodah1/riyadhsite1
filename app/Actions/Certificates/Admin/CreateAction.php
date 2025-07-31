<?php

namespace App\Actions\Certificates\Admin;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Log;

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

            if ($request->hasFile('pdf')) {
                $pdfPath = $request->file('pdf')->store('pdfs', 'public');
            }

            Certificate::create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'image' => $coverPath,
                'pdf' => $pdfPath,
            ]);

            return back()->with('success', 'تم إضافة الشهادة بنجاح');

        } catch (\Exception $e) {
            Log::error('خطأ في إضافة الشهادة: ' . $e->getMessage());

            return back()->with('error', 'حدث خطأ أثناء إضافة الشهادة، يرجى المحاولة مرة أخرى.');
        }
    }
}
