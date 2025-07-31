<?php

namespace App\Actions\Certificates\Admin;

use App\Models\Certificate;
use Lorisleiva\Actions\Concerns\AsAction;

class CertificateAdminIndex
{
    use AsAction;

    public function handle()
    {
        $certificates = Certificate::query()->get();
        return view('certificate.admin.index', compact('certificates'));
    }
}
