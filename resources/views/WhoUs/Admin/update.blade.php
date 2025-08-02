@extends('admin.layout.dashboard')

@section('content')


    <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-right">تعديل صفحة "من أنا"</h2>

        <form action="{{ route('update.notes', $note->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4 text-right">
                <label for="title" class="block text-gray-700 font-bold mb-2">العنوان:</label>
                <input type="text" name="title" id="title" value="{{ $note->title }}"
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4 text-right">
                <label for="image" class="block text-gray-700 font-bold mb-2">الصورة:</label>
                <input type="file" name="image" id="image"
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">

                @if(!empty($note->image))
                    <div class="mt-4">
                        <p class="text-sm text-gray-600 mb-2">الصورة الحالية:</p>
                        <img src="{{ asset('public/storage/' . $note->image) }}" class="h-24 rounded">
                    </div>
                @endif
            </div>

            {{-- محرر Trix --}}
            <div class="mb-4 text-right">
                <label for="content" class="block text-gray-700 font-bold mb-2">من أنا:</label>
                <input id="content" type="hidden" name="content" value="{{ $note->content }}">
                <trix-editor input="content" class="trix-content"></trix-editor>
            </div>

            <div class="text-right">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded">
                    حفظ التعديلات
                </button>
            </div>
        </form>
    </div>
@endsection
