<?php

namespace App\Actions\Blog;

use App\Models\Blog;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class BlogDeleteAction
{
    use AsAction;

    public function handle(Blog $blog)
    {
      $blog->delete();
      return back();
    }
}
