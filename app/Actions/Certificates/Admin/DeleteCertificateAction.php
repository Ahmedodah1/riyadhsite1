<?php

namespace App\Actions\Certificates\Admin;

use App\Models\Certificate;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteCertificateAction
{
    use AsAction;

    public function handle(Certificate $certificate)
    {
        $certificate->delete();
        return back();
    }
}
