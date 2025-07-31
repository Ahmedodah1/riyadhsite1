<?php

namespace App\Actions\Books\admin;

use App\Models\Book;
use Lorisleiva\Actions\Concerns\AsAction;

class BooksIndexAction
{
    use AsAction;

    public function handle()
    {
        $books = Book::all();
        return view('books.admin.index', compact('books'));
    }
}
