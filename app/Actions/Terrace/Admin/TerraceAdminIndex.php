<?php

namespace App\Actions\Terrace\Admin;
use App\Models\Terraces;

use Lorisleiva\Actions\Concerns\AsAction;

class TerraceAdminIndex
{
    use AsAction;

    public function handle()
    {
        $terraces = Terraces::query()->get();
        return view('terrace.admin.index' , compact('terraces'));
    }
}
