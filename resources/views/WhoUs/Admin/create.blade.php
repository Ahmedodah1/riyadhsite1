@extends('admin.layout.dashboard')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endpush

@section('content')
    {{-- رسالة نجاح متحركة --}}
    @if(session('success'))
        <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg text-base font-semibold transition-opacity duration-500 z-50"
        >
            {{ session('success') }}
        </div>
    @endif

    <div class="max-w-3xl mx-auto mt-14 bg-white p-8 rounded-xl shadow-md text-right space-y-8">
        <h2 class="text-3xl font-extrabold text-blue-900 mb-6">تعديل صفحة من أنا</h2>

        <form action="{{ route('create.notes') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block mb-2 font-semibold text-gray-700">العنوان</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    value="{{ old('title', $title ?? '') }}"
                    class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="أدخل عنوان الصفحة"
                    required
                >
            </div>

            <div>
                <label for="image" class="block mb-2 font-semibold text-gray-700">الصورة</label>
                <input
                    type="file"
                    name="image"
                    id="image"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    accept="image/*"
                >

                @if(!empty($image))
                    <div class="mt-4">
                        <p class="text-sm text-gray-600 mb-2">الصورة الحالية:</p>
                        <img
                            src="{{ asset('storage/' . $image) }}"
                            alt="الصورة الحالية"
                            class="w-40 h-40 object-cover rounded-lg border border-gray-200 shadow"
                        >
                    </div>
                @endif
            </div>

            <div>
                <label for="content" class="block mb-2 font-semibold text-gray-700">من أنا:</label>
                <input
                    id="content"
                    type="hidden"
                    name="content"
                    value="{{ old('about', $about ?? '') }}"
                >
                <trix-editor
                    input="content"
                    class="trix-content border border-gray-300 rounded-md min-h-[150px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                    style="font-size: 1.25rem; line-height: 1.6;"
                ></trix-editor>
            </div>

            <div>
                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-md shadow transition-colors duration-300"
                >
                    حفظ التعديلات
                </button>
            </div>
        </form>
    </div>
@endsection
