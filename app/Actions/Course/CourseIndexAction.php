<?php

namespace App\Actions\Course;

use App\Models\BlackAndWhite;
use Lorisleiva\Actions\Concerns\AsAction;

class CourseIndexAction
{
    use AsAction;

    public function handle()
    {
        $photos=BlackAndWhite::query()->get();
       return view('Course.index', compact('photos'));
    }

    public function viewForm()
    {
        return view('Course.create');
    }
}
