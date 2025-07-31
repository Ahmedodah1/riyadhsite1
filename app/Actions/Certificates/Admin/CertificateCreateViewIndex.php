<?php

namespace App\Actions\Certificates\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class CertificateCreateViewIndex
{
    use AsAction;

    public function handle()
    {
        return view('certificate.admin.create');
    }
}
