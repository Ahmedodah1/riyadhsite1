<div class="container mx-auto p-4">
    <h1 class="text-lg sm:text-xl md:text-2xl font-bold mb-4 text-center">
        {{ $book->title }}
    </h1>

    <!-- Desktop فقط -->
    <div id="pdf-desktop"
         class="hidden md:block rounded-xl overflow-hidden shadow-lg border
                h-[800px]">

        <iframe
            src="{{ route('books.pdf', $book->id) }}"
            class="w-full h-full border-0"
            allowfullscreen>
        </iframe>
    </div>

    <!-- Mobile فقط -->
    <div id="pdf-mobile"
         class="block md:hidden rounded-xl shadow-lg border
                h-[60vh] flex items-center justify-center
                bg-gray-50">

        <a href="{{ route('books.pdf', $book->id) }}"
           target="_blank"
           class="px-8 py-4 rounded-xl
                  bg-yellow-400 text-black
                  font-semibold text-lg
                  shadow-md hover:shadow-lg
                  transition">

            فتح الملف
        </a>
    </div>
</div>
