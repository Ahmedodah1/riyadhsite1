<?php

namespace App\Actions\Certificates\Admin;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class EditCertificateAction
{
    use AsAction;

    public function handle(Request $request, Certificate $certificate)
    {
        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('pdf')) {
            $data['pdf'] = $request->file('pdf')->store('pdfs', 'public');
        }

        $certificate->update($data);

        return redirect()->back()->with('success', 'تم تحديث الكتاب بنجاح');
    }
}
