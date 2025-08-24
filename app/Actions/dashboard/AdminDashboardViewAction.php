<?php

namespace App\Actions\dashboard;

use Lorisleiva\Actions\Concerns\AsAction;

class AdminDashboardViewAction
{
    use AsAction;

    public function handle()
    {
        // إذا لم يُرحب بالمستخدم مسبقاً
        $showWelcome = !session()->has('welcomed');

        if ($showWelcome) {
            session(['welcomed' => true]);
        }

        // تأكد من أن Blade الذي تعرضه هو dashboard.blade.php وليس layout
        return view('admin.layout.dashboard', compact('showWelcome'));
    }
}
