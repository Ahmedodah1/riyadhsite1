<?php

namespace App\Actions\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class LoginPostAction
{
    use AsAction;

    public function handle(Request $request)
    {
        $user = User::query()->where('email', $request->get('email'))->first();

        if(Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])){
            if($user->type == 0) {
                return redirect()->route('homepage');
            } else if($user->type == 1) {
                return redirect()->route('dashboard');
            }
        }
        return back();
    }
}


