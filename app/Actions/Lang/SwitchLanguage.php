<?php

namespace App\Actions\Lang;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SwitchLanguage
{
    public function __invoke(string $locale)
    {
        if (!in_array($locale, ['en', 'ar'])) {
            abort(400);
        }

        Session::put('locale', $locale);
        App::setLocale($locale);

        return redirect()->back();
    }
}
