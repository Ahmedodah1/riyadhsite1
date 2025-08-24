<?php

namespace App\Actions\dashboard;

use Lorisleiva\Actions\Concerns\AsAction;

class AdminDashboardViewAction
{
    use AsAction;

    public function handle()
    {
        $showWelcome = !session()->has('welcomed');

        if ($showWelcome) {
            session(['welcomed' => true]);
        }

        return view('admin.layout.dashboard', compact('showWelcome'));
    }
}
