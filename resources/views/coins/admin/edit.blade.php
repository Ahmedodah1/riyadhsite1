@extends('admin.layout.dashboard')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow text-right">
        <h2 class="text-2xl font-bold mb-6">تعديل العملة</h2>

        <form action="{{ route('coin-update', $coin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- العنوان --}}
            <div class="mb-4">
                <label for="title" class="block mb-1 font-medium">عنوان العملة</label>
                <input dir="rtl" value="{{ $coin->title }}" type="text" id="title" name="title"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            {{-- الوصف --}}
            <div class="mb-4">
                <label for="description" class="block mb-1 font-medium">وصف العملة</label>
                <textarea dir="rtl" id="description" name="description" rows="4"
                          class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                          required>{{ $coin->description }}</textarea>
            </div>

            {{-- الدولة --}}
            <div class="mb-4">
                <label for="country" class="block mb-1 font-medium">الدولة</label>
                <input dir="rtl" value="{{ $coin->country }}" type="text" id="country" name="country"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            {{-- الصورة الحالية --}}
            @if($coin->image)
                <div class="mb-2">
                    <label class="block mb-1 font-medium">الصورة الحالية:</label>
                    <img src="{{ asset('public/storage/' . $coin->image) }}" class="h-24 rounded">
                </div>
            @endif

            {{-- رفع صورة جديدة --}}
            <div class="mb-6">
                <label for="image" class="block mb-1 font-medium">صورة العملة (اختياري)</label>
                <input dir="rtl" type="file" id="image" name="image" accept="image/*"
                       class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            {{-- العملات المشابهة --}}
            <div class="mb-6">
                <label class="block mb-1 font-medium">العملات المشابهة</label>
                <select name="related[]" multiple class="w-full border rounded px-3 py-2" dir="rtl">
                    @foreach($allCoins as $c)
                        <label class="block border rounded p-2 text-center cursor-pointer">
                            <input type="checkbox" name="related[]" value="{{ $c->id }}"
                                {{ in_array($c->id, json_decode($coin->related ?? '[]')) ? 'checked' : '' }}>
                            <img src="{{ asset('public/storage/' . $c->image) }}" class="h-20 mx-auto mb-1">
                            <span>{{ $c->title }}</span>
                        </label>
                    @endforeach
                </select>


                <small class="text-gray-500">اضغط Ctrl أو Cmd لتحديد أكثر من عملة</small>
            </div>

            {{-- زر الحفظ --}}
            <div class="text-right">
                <button type="submit"
                        class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition w-full">
                    تحديث العملة
                </button>
            </div>
        </form>
    </div>
@endsection
