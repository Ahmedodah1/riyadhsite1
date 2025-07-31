<?php

namespace App\Actions\Blog;

use App\Models\Blog;
use Lorisleiva\Actions\Concerns\AsAction;

class BlogCreateViewAction
{
    use AsAction;

    public function handle()
    {
        return view('blog.admin.create');
    }
}
