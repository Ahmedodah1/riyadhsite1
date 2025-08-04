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

        // مسار الملف داخل storage/app/public
        $path = storage_path('app/public/' . $book->cover_url);

        // تحقق من وجود الملف فعليًا
        if (!file_exists($path)) {
            abort(404, 'الملف غير موجود');
        }

        // إرسال الملف مباشرة إلى المتصفح
        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="book.pdf"',
        ]);
    }


    public function pdfCertificate($id)
    {
        $certificate = Certificate::findOrFail($id);

        if (!Storage::disk('public')->exists($certificate->pdf)) {
            abort(404, 'الملف غير موجود');
        }
    }

    }
