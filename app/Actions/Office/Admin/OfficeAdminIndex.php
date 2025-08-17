<?php

namespace App\Actions\Office\Admin;
use App\Models\Office;

use Lorisleiva\Actions\Concerns\AsAction;

class OfficeAdminIndex
{
    use AsAction;

    public function handle()
    {
        $offices = Office::query()->get();
        return view('office.admin.index' , compact('offices'));
    }
}
