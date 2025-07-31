<?php

namespace App\Actions\Certificates\Admin;

use App\Models\Certificate;
use Lorisleiva\Actions\Concerns\AsAction;

class CertificateEditView
{
    use AsAction;

    public function handle(Certificate $certificate)
    {
        return view('certificate.admin.edit', compact('certificate'));
    }
}
