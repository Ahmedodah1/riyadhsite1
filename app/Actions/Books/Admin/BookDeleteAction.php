<?php

namespace App\Actions\Books\Admin;

use App\Models\Book;
use Lorisleiva\Actions\Concerns\AsAction;

class BookDeleteAction
{
    use AsAction;

    public function handle(Book $book)
    {
        $book->delete();
        return back();
    }
}
