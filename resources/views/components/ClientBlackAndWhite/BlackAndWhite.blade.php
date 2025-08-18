<div x-data="{ open: false, image: '', visible: 8 }" class="relative">
    <!-- العنوان -->
    <div class="bg-gradient-to-r from-purple-100 via-pink-50 to-purple-100 min-h-screen py-16 px-6 sm:px-10 lg:px-20">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mt-10 mb-12">
            ✨ تصويري ✨
        </h1>

        <!-- شبكة الصور -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
            @foreach($clients as $index => $client)
                <div x-show="{{ $index }} < visible"
                     class="bg-white rounded-3xl border border-gray-100 shadow-xl hover:shadow-2xl transition duration-500 overflow-hidden group">

                    <!-- الصورة -->
                    <button @click="open = true; image = @js(asset('storage/' . $client->image))" class="block w-full">
                        <img src="{{ asset('storage/' . $client->image) }}"
                             alt="{{ $client->Title }}"
                             class="w-full h-[350px] object-cover transform group-hover:scale-110 transition duration-500" />
                    </button>

                    <!-- تفاصيل -->
                    <div class="p-5 text-right">
                        <h2 class="text-lg font-bold text-gray-900 mb-2">{{ $client->Title }}</h2>
                        <p class="text-sm text-gray-600">{{ $client->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- زر عرض المزيد -->
        <div class="text-center mt-10" x-show="visible < {{ count($clients) }}">
            <button @click="visible += 6"
                    class="bg-gradient-to-r from-purple-600 to-pink-500 text-white px-8 py-3 rounded-full text-lg font-semibold hover:opacity-90 transition transform hover:scale-105 shadow-lg">
                👀 عرض المزيد
            </button>
        </div>
    </div>

    <!-- نافذة التكبير -->
    <div x-show="open"
         x-transition
         class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 p-4"
         @click.self="open = false">

        <div class="relative max-w-5xl w-full">
            <!-- زر الإغلاق -->
            <button @click="open = false"
                    class="absolute top-3 right-3 text-white bg-red-600 hover:bg-red-700 p-2 rounded-full text-xl shadow-lg">
                ✕
            </button>

            <!-- الصورة المكبرة -->
            <img :src="image" alt="عرض الصورة"
                 class="w-full max-h-[85vh] object-contain rounded-2xl shadow-2xl transform scale-95 hover:scale-100 transition duration-500">
        </div>
    </div>
</div>
