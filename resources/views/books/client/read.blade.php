<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 to-gray-100 px-4">

    <div class="w-full max-w-6xl text-center">

        <!-- العنوان -->
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-wide
                   text-gray-900 mb-8">
            {{ $book->title }}
        </h1>

        <!-- Desktop PDF -->
        <div id="pdf-desktop"
             class="hidden md:block mx-auto
                    rounded-2xl overflow-hidden
                    border border-gray-200
                    shadow-[0_20px_60px_rgba(0,0,0,0.15)]
                    bg-white
                    h-[80vh]">

            <iframe
                src="{{ route('books.pdf', $book->id) }}"
                class="w-full h-full border-0"
                loading="lazy"
                allowfullscreen>
            </iframe>
        </div>

        <!-- Mobile Button -->
        <div id="pdf-mobile"
             class="md:hidden mt-12">

            <a href="{{ route('books.pdf', $book->id) }}"
               target="_blank"
               class="inline-flex items-center justify-center
                      px-10 py-5 rounded-2xl
                      bg-gradient-to-r from-yellow-400 to-yellow-500
                      text-black text-lg font-semibold
                      shadow-[0_15px_40px_rgba(250,204,21,0.45)]
                      hover:scale-105 hover:shadow-[0_20px_50px_rgba(250,204,21,0.6)]
                      transition-all duration-300">

                📖 فتح الملف
            </a>

            <p class="mt-4 text-sm text-gray-500">
                سيتم فتح الملف في نافذة جديدة
            </p>
        </div>

    </div>
</div>
