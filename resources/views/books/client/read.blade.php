
    <div class="fixed inset-0 bg-gradient-to-br from-gray-50 to-gray-100
            flex items-center justify-center">

        <div class="w-full max-w-6xl px-6 text-center">

            <!-- العنوان -->
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-10">
                {{ $book->title }}
            </h1>

            <!-- Desktop -->
            <div class="hidden md:block
                    rounded-2xl overflow-hidden
                    bg-white
                    shadow-2xl
                    border border-gray-200
                    h-[80vh]">

                <iframe
                    src="{{ route('books.pdf', $book->id) }}"
                    class="w-full h-full border-0"
                    allowfullscreen>
                </iframe>
            </div>

            <!-- Mobile -->
            <div class="md:hidden mt-12">
                <a href="{{ route('books.pdf', $book->id) }}"
                   target="_blank"
                   class="inline-flex items-center justify-center gap-3
          px-10 py-5 rounded-2xl
          bg-yellow-400
          text-black
          shadow-lg hover:scale-105 transition">

                    <!-- أيقونة -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6v12m0 0l4-4m-4 4l-4-4" />
                    </svg>

                    <!-- النص -->
                    <span class="flex flex-col leading-tight text-right">
        <span class="text-lg font-bold tracking-wide">
            فتح الملف
        </span>
        <span class="text-xs opacity-70">
            عرض الكتاب بصيغة PDF
        </span>
    </span>
                </a>

            </div>

        </div>
    </div>
