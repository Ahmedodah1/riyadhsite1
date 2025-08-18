<div x-data="{ open: false, image: '', visible: 8 }" class="relative">
    <!-- العنوان -->
    <div class="bg-gray-50 min-h-screen py-16 px-4 sm:px-10 lg:px-20">
        <h1 class="text-3xl font-extrabold text-center text-gray-800 mt-20">📸 معرض الصور</h1>

        <!-- شبكة الصور -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-11">
            @foreach($clients as $index => $client)
                <div
                    x-show="{{ $index }} < visible"
                    class="bg-white rounded-2xl border border-gray-200 shadow hover:shadow-md transition duration-300 overflow-hidden">

                    <button @click="open = true; image = @js(asset('storage/' . $client->image))" class="block w-full">
                        <img src="{{ asset('storage/' . $client->image) }}"
                             alt="{{ $client->Title }}"
                             class="w-full h-64 object-cover hover:scale-105 transition duration-300" />
                    </button>

                    <div class="p-4 text-right">
                        <h2 class="text-lg font-semibold text-gray-900 truncate">{{ $client->Title }}</h2>
                        <p class="text-sm text-gray-600 mt-1">{{ $client->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- زر عرض المزيد -->
        <div class="text-center mt-8" x-show="visible < {{ count($clients) }}">
            <button @click="visible += 8"
                    class="bg-gray-800 text-white px-6 py-2 rounded-lg hover:bg-gray-900 transition">
                عرض المزيد
            </button>
        </div>
    </div>

    <!-- ✅ نافذة التكبير -->
    <div x-show="open"
         x-transition
         class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50"
         @click.self="open = false">

        <div class="relative max-w-4xl w-full p-4">
            <!-- زر الإغلاق -->
            <button @click="open = false"
                    class="absolute top-2 right-2 text-white bg-red-600 hover:bg-red-700 p-1 rounded-full text-lg">
                &times;
            </button>

            <!-- الصورة المكبرة -->
            <img :src="image" alt="عرض الصورة" class="w-full max-h-[85vh] object-contain rounded-lg shadow-lg">
        </div>
    </div>
</div>
