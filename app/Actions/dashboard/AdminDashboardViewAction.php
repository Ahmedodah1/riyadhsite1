<?php

namespace App\Actions\dashboard;

use Lorisleiva\Actions\Concerns\AsAction;

class AdminDashboardViewAction
{
    use AsAction;

    public function handle()
    {
        // تحقق إذا المستخدم دخل أول مرة في الجلسة
        $showWelcome = !session()->has('welcomed');

        if ($showWelcome) {
            session(['welcomed' => true]);
        }

        return view('admin.layout.dashboard', compact('showWelcome'));
    }
}
