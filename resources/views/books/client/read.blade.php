<div class="container mx-auto p-4">

    <!-- عنوان الكتاب -->
    <h1 class="text-lg sm:text-xl md:text-2xl font-bold mb-6 text-center">
        {{ $book->title }}
    </h1>

    <!-- كرت العرض -->
    <div class="rounded-2xl shadow-lg border
                h-[75vh] sm:h-[80vh] md:h-[800px]
                flex items-center justify-center
                bg-gradient-to-br from-gray-50 to-gray-100">

        <div class="text-center space-y-4">

            <!-- أيقونة -->
            <div class="flex justify-center">
                <div class="w-20 h-20 rounded-full bg-red-100 flex items-center justify-center">
                    <svg class="w-10 h-10 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 2h9l5 5v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"/>
                    </svg>
                </div>
            </div>

            <!-- نص -->
            <p class="text-gray-700 text-base sm:text-lg">
                هذا الكتاب متوفر بصيغة PDF
            </p>

            <p class="text-sm text-gray-500">
                اضغط على الزر أدناه لفتح الملف
            </p>

            <!-- زر فتح الملف -->
            <a href="{{ route('books.pdf', $book->id) }}"
               target="_blank"
               class="inline-flex items-center justify-center gap-3
                      px-8 py-4 rounded-xl
                      bg-yellow-400 text-black
                      font-semibold text-lg
                      shadow-md hover:shadow-xl
                      transition-all duration-300
                      hover:scale-[1.05]">

                <!-- أيقونة فتح -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14 3h7v7m0-7L10 14M5 5v14h14" />
                </svg>

                فتح الملف
            </a>

        </div>
    </div>
</div>
