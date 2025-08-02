<?php

namespace App\Actions\Certificates\Client;

use App\Models\Certificate;
use Lorisleiva\Actions\Concerns\AsAction;

class CertificateClientIndex
{
    use AsAction;

    public function handle()
    {
        $certificates = Certificate::query()->get();
        return view('certificate.client.certificate', compact('certificates'));
    }
}
