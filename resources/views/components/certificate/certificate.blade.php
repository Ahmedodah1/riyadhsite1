<div class="bg-gradient-to-br from-gray-50 via-white to-gray-100 min-h-screen py-20 px-6 sm:px-12 lg:px-24">
    <h1 class="text-3xl font-bold mb-6 text-center mt-20 ">شهاداتي ودوراتي </h1>

    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
        @foreach($certificates as $certificate)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-lg hover:shadow-xl transition duration-300 flex flex-col overflow-hidden">
                <div class="relative group">
                    <img
                        src="{{ $certificate->image ? asset('storage/' . $certificate->image) : asset('1.jpg') }}"
                        alt="صورة الشهادة"
                        class="w-full h-56 object-cover object-center transform transition duration-500 group-hover:scale-105"
                    />
                    <span class="absolute top-3 right-3 bg-indigo-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md">
                        جديد
                    </span>
                </div>

                <div class="p-5 flex flex-col flex-grow">
                    <h2 class="text-lg font-bold text-gray-800 mb-1 truncate" title="{{ $certificate->title }}">
                        {{ $certificate->title }}
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-4">
                        {{ $certificate->description }}
                    </p>
                    <a href="{{ route('certificate.read', $certificate->id) }}"
                       class="mt-auto inline-block text-center bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold py-2.5 rounded-lg transition">
                        عرض الشهادة
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
