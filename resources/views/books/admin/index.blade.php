@extends('admin.layout.dashboard')

@section('content')
    <div class="p-6">
        <!-- زر إضافة كتاب جديد -->
        <div class="mb-6">
            <a href="{{ route('book-create') }}"
               class="inline-block bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-6 py-3 rounded-xl font-semibold shadow-md transition transform hover:scale-105">
                + إضافة كتاب جديد
            </a>
        </div>

        <!-- الجدول -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-xl shadow-lg overflow-hidden">
                <thead>
                <tr class="bg-gradient-to-r from-indigo-500 to-indigo-600 text-white">
                    <th class="px-5 py-3 text-right font-semibold">العمليات</th>
                    <th class="px-5 py-3 text-right font-semibold">الإنشاء</th>
                    <th class="px-5 py-3 text-right font-semibold">الصورة</th>
                    <th class="px-5 py-3 text-right font-semibold">الوصف</th>
                    <th class="px-5 py-3 text-right font-semibold">العنوان</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                @foreach($books as $book)
                    <tr class="hover:bg-gray-50 transition">
                        <!-- العمليات -->
                        <td class="px-5 py-3 flex flex-col gap-1 sm:flex-row sm:gap-3 text-sm">
                            <form action="{{ route('book.delete', $book->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                                @csrf
                                <button type="submit" class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white rounded-lg shadow transition">
                                    حذف
                                </button>
                            </form>
                            <form action="{{ route('book.edit', $book->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="px-3 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-lg shadow transition">
                                    تعديل
                                </button>
                            </form>
                        </td>

                        <!-- تاريخ الإنشاء -->
                        <td class="px-5 py-3 text-gray-700">{{ $book->created_at->format('Y-m-d') }}</td>

                        <!-- الصورة -->
                        <td class="px-5 py-3">
                            @if($book->image)
                                <img src="{{ asset('public/storage/' . $book->image) }}" class="h-16 w-16 object-cover rounded-lg shadow" alt="غلاف">
                            @else
                                <span class="text-gray-400 italic">لا يوجد</span>
                            @endif
                        </td>

                        <!-- الوصف -->
                        <td class="px-5 py-3 text-gray-600">{{ Str::limit($book->description, 50) }}</td>

                        <!-- العنوان -->
                        <td class="px-5 py-3 font-semibold text-gray-800">{{ $book->title }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
