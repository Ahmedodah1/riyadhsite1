<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class SwitchLanguage extends Controller

{
    public function __invoke($locale)
    {
        if (!in_array($locale, ['ar', 'en'])) {
            abort(400);
        }

        Session::put('locale', $locale);

        return redirect()->back();
    }
}

