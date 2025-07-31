<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class Blog
{
    use AsAction;

    public function handle()
    {
        $blogs = \App\Models\Blog::all();
        return view('blog.blog' , compact('blogs'));    }
}
