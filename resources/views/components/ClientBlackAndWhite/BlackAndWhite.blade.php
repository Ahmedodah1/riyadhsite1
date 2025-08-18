<div x-data="{ open: false, image: '', visible: 8 }" class="relative">
    <!-- العنوان -->
    <div class="bg-gradient-to-r from-gray-100 via-white to-gray-100 min-h-screen py-16 px-4 sm:px-10 lg:px-20">
        <h1 class="text-4xl font-extrabold text-center text-gray-900 mt-16 tracking-wide">
            📸 تصويري
        </h1>
        <p class="text-center text-gray-600 mt-3 text-lg">مجموعة مختارة من لقطاتي المفضلة ✨</p>

        <!-- شبكة الصور -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-12">
            @foreach($clients as $index => $client)
                <div x-show="{{ $index }} < visible"
                     class="group bg-white rounded-2xl border border-gray-200 shadow-md hover:shadow-2xl transition duration-500 overflow-hidden transform hover:-translate-y-2 hover:scale-105">

                    <!-- صورة -->
                    <button @click="open = true; image = @js(asset('storage/' . $client->image))" class="block w-full">
                        <img src="{{ asset('public/storage' . $client->image) }}"
                             alt="{{ $client->Title }}"
                             class="w-full h-80 object-cover group-hover:brightness-110 transition duration-500" />
                    </button>

                    <!-- النص -->
                    <div class="p-5 text-right bg-gradient-to-t from-gray-50 via-white">
                        <h2 class="text-xl font-bold text-gray-900 truncate">{{ $client->Title }}</h2>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2">{{ $client->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- زر عرض المزيد -->
        <div class="text-center mt-10" x-show="visible < {{ count($clients) }}">
            <button @click="visible += 8"
                    class="bg-gray-900 text-white px-8 py-3 rounded-xl text-lg font-semibold shadow-lg hover:bg-gray-800 transition">
                👀 عرض المزيد
            </button>
        </div>
    </div>

    <!-- ✅ نافذة التكبير -->
    <div x-show="open"
         x-transition.opacity
         class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 p-4"
         @click.self="open = false">

        <div class="relative max-w-5xl w-full">
            <!-- زر الإغلاق -->
            <button @click="open = false"
                    class="absolute top-4 right-4 text-white bg-red-600 hover:bg-red-700 p-2 rounded-full text-2xl shadow-lg">
                &times;
            </button>

            <!-- الصورة المكبرة -->
            <img :src="image" alt="عرض الصورة"
                 class="w-full max-h-[85vh] object-contain rounded-2xl shadow-2xl border-4 border-white">
        </div>
    </div>
</div>
