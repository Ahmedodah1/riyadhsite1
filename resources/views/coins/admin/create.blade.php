@extends('admin.layout.dashboard')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow text-right">

        {{-- إشعار النجاح --}}
        @if(session('success'))
            <div
                id="successAlert"
                class="fixed top-5 right-5 max-w-sm w-full bg-green-600 text-white px-6 py-4 rounded-lg shadow-lg flex items-center space-x-3 animate-slide-in"
                style="animation-fill-mode: forwards;"
                dir="rtl"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <span class="font-semibold">{{ session('success') }}</span>
            </div>
        @endif

        {{-- بيانات إضافة العملة --}}
        <h2 class="text-2xl font-bold mb-6">إضافة عملة جديدة</h2>

        <form action="{{ route('coin-create') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- عنوان العملة --}}
            <div class="mb-4">
                <label for="title" class="block mb-1 font-medium">عنوان العملة</label>
                <input dir="rtl" type="text" id="title" name="title" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            {{-- وصف العملة --}}
            <div class="mb-4">
                <label for="description" class="block mb-1 font-medium">وصف العملة</label>
                <textarea dir="rtl" id="description" name="description" rows="4" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
            </div>

            {{-- الدولة --}}
            <div class="mb-4">
                <label for="country" class="block mb-1 font-medium">الدولة</label>
                <input dir="rtl" type="text" id="country" name="country" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="مثال: السعودية" required>
            </div>

            {{-- صورة العملة --}}
            <div class="mb-6">
                <label for="image" class="block mb-1 font-medium">صورة العملة</label>
                <input dir="rtl" type="file" id="image" name="image" accept="image/*" class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            {{-- العملات المشابهة --}}
            <h3 class="text-lg font-semibold mb-2">العملات المشابهة (اختياري)</h3>
            <div id="related-coins-wrapper">
                <div class="related-coin mb-4 border p-3 rounded">
                    <input type="text" name="related_title[]" placeholder="عنوان العملة المشابهة" class="w-full mb-2 border border-gray-300 rounded px-2 py-1">
                    <input type="file" name="related_image[]" accept="image/*" class="w-full">
                </div>
            </div>
            <button type="button" id="add-related-coin" class="mb-6 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">+ إضافة عملة مشابهة</button>

            {{-- زر الحفظ --}}
            <div class="text-right">
                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition w-full">
                    حفظ العملة
                </button>
            </div>
        </form>
    </div>

    {{-- جافاسكريبت لإضافة حقول جديدة وإخفاء الإشعار تلقائيًا --}}
    <script>
        // إضافة حقل عملة مشابهة جديد
        document.getElementById('add-related-coin').addEventListener('click', function() {
            const wrapper = document.getElementById('related-coins-wrapper');
            const newField = document.createElement('div');
            newField.classList.add('related-coin', 'mb-4', 'border', 'p-3', 'rounded');
            newField.innerHTML = `
            <input type="text" name="related_title[]" placeholder="عنوان العملة المشابهة" class="w-full mb-2 border border-gray-300 rounded px-2 py-1">
            <input type="file" name="related_image[]" accept="image/*" class="w-full">
        `;
            wrapper.appendChild(newField);
        });

        // إخفاء رسالة النجاح تلقائيًا بعد 4 ثواني
        setTimeout(() => {
            const alert = document.getElementById('successAlert');
            if(alert) alert.remove();
        }, 4000);
    </script>
@endsection
