<?php

namespace App\Actions\Gym\Admin;

use App\Models\Gym;
use Lorisleiva\Actions\Concerns\AsAction;

class GymEditView
{
    use AsAction;

    public function handle($id)  // 👈 استقبل الـ id
    {
        $gym = Gym::findOrFail($id); // 👈 عنصر واحد فقط
        return view('gym.admin.edit' , compact('gym'));
    }

}
