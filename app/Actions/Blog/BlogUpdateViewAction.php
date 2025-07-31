<?php

namespace App\Actions\Blog;

use App\Models\Blog;
use Lorisleiva\Actions\Concerns\AsAction;

class BlogUpdateViewAction
{
    use AsAction;

    public function handle(Blog $blog)
    {
        return view('blog.admin.update', compact('blog'));
    }
}
