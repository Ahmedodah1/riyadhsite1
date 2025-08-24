<?php

namespace App\Actions\dashboard;

use Lorisleiva\Actions\Concerns\AsAction;

class AdminDashboardViewAction
{
    use AsAction;

    public function handle()
    {
        // إذا ما دخل قبل
        if (!session()->has('welcomed')) {
            session(['welcomed' => true]);
            $showWelcome = false;
        } else {
            $showWelcome = false;
        }

        return view('admin.layout.dashboard', compact('showWelcome'));
    }
}
