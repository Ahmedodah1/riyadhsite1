<?php

namespace App\Actions\BlackAndWhite;

use App\Models\BlackAndWhite;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use function Pest\Laravel\get;

class CreatePhotosAction
{
    use AsAction;

    public function handle(Request $request)
    {

        $coverPath = null;

        if ($request->hasFile('image')) {
            $coverPath = $request->file('image')->store('images', 'public');
        }
      BlackAndWhite::query()->create([
          'image'=>$coverPath,
          'title'=>$request->get('title'),
          'description'=>$request->get('description'),

      ]);
      return back()->with('', '');
    }
}
