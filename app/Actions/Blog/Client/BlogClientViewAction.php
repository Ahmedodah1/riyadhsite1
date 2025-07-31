<?php

namespace App\Actions\Blog\Client;

use App\Models\Blog;
use Lorisleiva\Actions\Concerns\AsAction;

class BlogClientViewAction
{
    use AsAction;

    public function handle()
    {
        $blogs = Blog::all();
        return view('blog.blog' , compact('blogs'));
    }
}
