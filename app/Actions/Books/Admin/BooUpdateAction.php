<?php

namespace App\Actions\Books\Admin;

use App\Models\Book;
use Lorisleiva\Actions\Concerns\AsAction;

class BooUpdateAction
{
    use AsAction;

    public function handle(Book $book)
    {
        return view('books.admin.edit', compact('book'));
    }
}
