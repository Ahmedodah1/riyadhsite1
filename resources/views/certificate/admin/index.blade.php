@extends('admin.layout.dashboard')

@section('content')

    <div class="p-6">
        <div class="bg-green-200 w-56 flex justify-center items-center mb-4 rounded-xl hover:scale-100 duration-200 ease-in-out">
            <a href="{{ route('certificate-create-view') }}">
                <h1 class="text-lg font-bold p-3">اضافة شهادة جديدة</h1>
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow rounded-t-xl">
                <thead class="bg-gray-100 text-gray-700 rounded-t-xl">
                <tr>
                    <th class="px-4 py-2 text-right border-b">العمليات</th>
                    <th class="px-4 py-2 text-right border-b">الانشاء</th>
                    <th class="px-4 py-2 text-right border-b">الصورة</th>
                    <th class="px-4 py-2 text-right border-b">الوصف</th>
                    <th class="px-4 py-2 text-right border-b">العنوان</th>
                </tr>
                </thead>
                <tbody>
                @foreach($certificates as $certificate)
                    <tr class="text-gray-800 text-right">
                        <td class="px-4 py-2 border-b">
                            <form action="{{ route('certificate-delete', $certificate->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">حذف</button>
                            </form>
                            <form action="{{ route('certificate-update-view', $certificate->id) }}" method="GET">
                                <button type="submit" class="text-blue-500 hover:underline">تعديل</button>
                            </form>
                        </td>
                        <td class="px-4 py-2 border-b">{{ $certificate->created_at->format('Y-m-d') }}</td>
                        <td class="px-4 py-2 border-b">
                            @if($certificate->image)
                                <img src="{{ asset('storage/' . $certificate->image) }}" class="h-16 w-16 object-cover rounded" alt="غلاف">
                            @else
                                لا يوجد
                            @endif
                        </td>
                        <td class="px-4 py-2 border-b">{{ Str::limit($certificate->description, 50) }}</td>
                        <td class="px-4 py-2 border-b">{{ $certificate->title }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
