<?php

namespace App\Actions\dashboard;

use Lorisleiva\Actions\Concerns\AsAction;

class AdminDashboardViewAction
{
    use AsAction;

    public function handle()
    {
        // إذا لم يدخل قبل، أعطه الترحيب
        $showWelcome = !session()->has('welcomed');

        if ($showWelcome) {
            session(['welcomed' => true]); // لا يظهر الترحيب مرة أخرى
        }

        return view('admin.layout.dashboard', compact('showWelcome'));
    }
}
