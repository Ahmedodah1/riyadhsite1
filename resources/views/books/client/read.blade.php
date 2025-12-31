<div class="container mx-auto p-4">
    <h1 class="text-lg sm:text-xl md:text-2xl font-bold mb-4 text-center">
        {{ $book->title }}
    </h1>

    <div class="rounded-xl overflow-hidden shadow-lg border
                h-[75vh] sm:h-[80vh] md:h-[800px]">

        <a href="{{ route('books.pdf', $book->id) }}" target="_blank">
            فتح الملف
        </a>


    </div>
</div>

