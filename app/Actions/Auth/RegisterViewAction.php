<?php

namespace App\Actions\Auth;

use Lorisleiva\Actions\Concerns\AsAction;

class RegisterViewAction
{
    use AsAction;

    public function handle()
    {
        return view('auth.register');
    }
}
