@extends('admin.layout.dashboard')

@section('content')
<div class="p-6">
    <div class="bg-green-200 w-56 flex justify-center items-center mb-4 rounded-lg hover:scale-100 duration-200 ease-in-out">
        <a href="{{ route('admin.create.who.us') }}">
            <h1 class="text-lg font-bold p-3">اضافة بيانات جديدة</h1>
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow rounded-t-xl">
            <thead class="bg-gray-100 text-gray-700 rounded-t-xl">
            <tr>
                <th class="px-4 py-2 text-right border-b">العمليات</th>
                <th class="px-4 py-2 text-right border-b">الانشاء</th>
                <th class="px-4 py-2 text-right border-b">الصورة</th>
                <th class="px-4 py-2 text-right border-b">العنوان</th>
            </tr>
            </thead>
            <tbody>
            @foreach($notes as $note)
            <tr class="text-gray-800 text-right">
                <td class="px-4 py-2 border-b">
                    <form action="{{ route('delete.notes', $note->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                        @csrf
                        <button type="submit" class="text-red-500 hover:underline">حذف</button>
                    </form>
                    <form action="{{ route('view.form', $note->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="text-blue-500 hover:underline">تعديل</button>
                    </form>
                </td>
                <td class="px-4 py-2 border-b">{{ $note->created_at->format('Y-m-d') }}</td>
                <td class="px-4 py-2 border-b">
                    @if($note->image)
                    <img src="{{ asset('public/storage/' . $note->image) }}" class="h-16 w-16 object-cover rounded" alt="غلاف">
                    @else
                    لا يوجد
                    @endif
                </td>
                <td class="px-4 py-2 border-b">{{ $note->title }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
