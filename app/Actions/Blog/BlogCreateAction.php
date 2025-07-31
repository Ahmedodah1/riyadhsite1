<?php

namespace App\Actions\Blog;

use App\Models\Blog;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class BlogCreateAction
{
    use AsAction;

    public function handle(Request $request)
    {
        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images', 'public');
        }

        Blog::query()->create([
           'title' => $request->get('title'),
           'description' => $request->get('description'),
           'image' => $image
       ]);

        return redirect()->route('admin.blog.create.view')->with('success', 'تم حفظ المدونة بنجاح');
    }
}
