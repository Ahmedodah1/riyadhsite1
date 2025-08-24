<?php

namespace App\Actions\dashboard;

use Lorisleiva\Actions\Concerns\AsAction;

class AdminDashboardViewAction
{
    use AsAction;

    public function handle()
    {
        // تحقق إذا المستخدم دخل لأول مرة
        $showWelcome = false;
        if (!session()->has('welcomed')) {
            $showWelcome = true;
            session(['welcomed' => true]); // تعيين الجلسة هنا وليس في Blade
        }

        return view('admin.layout.dashboard', compact('showWelcome'));
    }
}
