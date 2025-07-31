<?php

namespace App\Actions\Blog;

use App\Models\Blog;
use Lorisleiva\Actions\Concerns\AsAction;

class BlogIndexAction
{
    use AsAction;

    public function handle()
    {
        $blogs = Blog::query()->get();
        return view('blog.admin.index', compact('blogs'));
    }
}
