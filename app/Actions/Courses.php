<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class courses
{
    use AsAction;

    public function handle()
    {
        return view('courses.courses');
    }
}
