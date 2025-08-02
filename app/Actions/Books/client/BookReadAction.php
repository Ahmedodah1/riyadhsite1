<?php

namespace App\Actions\Books\client;

use App\Models\Book;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;
use Lorisleiva\Actions\Concerns\AsAction;

class BookReadAction
{
    use AsAction;

    public function handle($id)
    {
        $book = Book::findOrFail($id);
        return view('books.client.read', compact('book'));
    }

    public function readCertificatePdf($id)
    {
        $certificate = Certificate::findOrFail($id);
        return view('certificate.client.read', compact('certificate'));
    }

    public function pdf($id)
    {
        $book = Book::findOrFail($id);

        if (!Storage::disk('public')->exists($book->cover_url)) {
            abort(404, 'الملف غير موجود');
        }

        $pdfContent = Storage::disk('public')->get($book->cover_url);

        return response($pdfContent)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="book.pdf"')
            ->header('Access-Control-Allow-Origin', '*');
    }

    public function pdfCertificate($id)
    {
        $certificate = Certificate::findOrFail($id);

        if (!Storage::disk('public')->exists($certificate->pdf)) {
            abort(404, 'الملف غير موجود');
        }

        $pdfContent = Storage::disk('public')->get($certificate->pdf);

        return response($pdfContent)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="certificate.pdf"')
            ->header('Access-Control-Allow-Origin', '*');
    }
}
