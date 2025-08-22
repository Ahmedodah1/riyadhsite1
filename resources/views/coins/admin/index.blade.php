@extends('admin.layout.dashboard')

@section('content')
    <div class="p-6">

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

            <script>
                setTimeout(() => {
                    const alert = document.getElementById('successAlert');
                    if(alert) alert.remove();
                }, 4000);
            </script>
        @endif

        {{-- زر إضافة صورة جديدة --}}
        <div class="bg-green-200 w-56 flex justify-center items-center mb-6 rounded-xl hover:scale-105 duration-200 ease-in-out shadow-md">
            <a href="{{ route('coin-create-view') }}">
                <h1 class="text-lg font-bold p-3">إضافة صورة جديدة</h1>
            </a>
        </div>

        {{-- جدول العملات --}}
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
                <thead class="bg-gray-100 text-gray-700 rounded-t-lg">
                <tr>
                    <th class="px-4 py-3 text-right border-b">العمليات</th>
                    <th class="px-4 py-3 text-right border-b">الإنشاء</th>
                    <th class="px-4 py-3 text-right border-b">الصورة</th>
                    <th class="px-4 py-3 text-right border-b">الوصف</th>
                    <th class="px-4 py-3 text-right border-b">العنوان</th>
                    <th class="px-4 py-3 text-right border-b">الدولة</th>
                </tr>
                </thead>
                <tbody>
                @forelse($coins as $coin)
                    <tr class="text-gray-800 text-right hover:bg-gray-50 transition">
                        <td class="px-4 py-3 border-b flex space-x-2 justify-end">
                            {{-- لا تعديل على خانة الحذف والتعديل --}}
                            <form action="{{ route('coin-edit-view', $coin->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="text-blue-500 hover:underline">تعديل</button>
                            </form>
                            <form action="{{ route('coin-delete', $coin->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">حذف</button>
                            </form>
                        </td>
                        <td class="px-4 py-3 border-b">{{ $coin->created_at->format('Y-m-d') }}</td>
                        <td class="px-4 py-3 border-b">
                            @if($coin->image)
                                <img src="{{ asset('public/storage/' . $coin->image) }}" class="h-16 w-16 object-cover rounded-lg shadow" alt="غلاف">
                            @else
                                <span class="text-gray-400">لا يوجد</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 border-b">{{ Str::limit($coin->description, 50) }}</td>
                        <td class="px-4 py-3 border-b font-medium">{{ $coin->title }}</td>
                        <td class="px-4 py-3 border-b text-gray-600">{{ $coin->country }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-6 text-gray-500">لا توجد عملات مضافة بعد.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
