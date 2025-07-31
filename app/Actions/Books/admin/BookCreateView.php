<?php

namespace App\Actions\Books\admin;

use Lorisleiva\Actions\Concerns\AsAction;

class BookCreateView
{
    use AsAction;

    public function handle()
    {
        return view('books.admin.create');
    }
}
