<?php

namespace App\Actions\dashboard;

use Lorisleiva\Actions\Concerns\AsAction;

class AdminDashboardViewAction
{
    use AsAction;

    public function handle()
    {
        // تحقق إذا هي أول زيارة للصفحة
        $showWelcome = false;
        if (!session()->has('welcomed')) {
            session(['welcomed' => true]);
            $showWelcome = true;
        }

        return view('admin.dashboard', compact('showWelcome'));
    }
}
