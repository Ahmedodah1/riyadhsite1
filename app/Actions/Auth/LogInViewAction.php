<?php

namespace App\Actions\Auth;

use Lorisleiva\Actions\Concerns\AsAction;

class LogInViewAction
{
    use AsAction;

    public function handle()
    {
        return view('auth.login');
    }
}
