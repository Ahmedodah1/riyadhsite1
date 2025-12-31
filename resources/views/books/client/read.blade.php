<div class="container mx-auto p-4">

    <!-- عنوان الكتاب -->
    <h1 class="text-lg sm:text-xl md:text-2xl font-bold mb-4 text-center">
        {{ $book->title }}
    </h1>

    <!-- كرت العرض -->
    <div class="rounded-xl overflow-hidden shadow-lg border
                h-[75vh] sm:h-[80vh] md:h-[800px]
                flex items-center justify-center
                bg-gradient-to-br from-gray-50 to-gray-100">

        <a href="{{ route('books.pdf', $book->id) }}"
           target="_blank"
           class="group inline-flex items-center gap-3
                  px-8 py-4 rounded-xl
                  bg-yellow-400 text-black
                  font-semibold text-lg
                  shadow-md hover:shadow-xl
                  transition-all duration-300
                  hover:scale-[1.03]">

            <!-- أيقونة -->
            <svg class="w-6 h-6 transition-transform duration-300 group-hover:translate-x-1"
                 fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M14 3h7v7m0-7L10 14M5 5v14h14" />
            </svg>

            فتح الملف
        </a>

    </div>
</div>
