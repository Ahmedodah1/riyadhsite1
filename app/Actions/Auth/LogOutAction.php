<?php

namespace App\Actions\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class LogOutAction
{
    use AsAction;

    public function handle()
    {
        Auth::logout();
        return redirect()->route('homepage');
    }
}
