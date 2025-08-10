@extends('admin.layout.dashboard')

@section('content')

    <div class="p-6">
        <!-- زر إضافة شهادة -->
        <div class="mb-6">
            <a href="{{ route('certificate-create-view') }}"
               class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-lg font-medium shadow transition transform hover:scale-105">
                + إضافة شهادة جديدة
            </a>
        </div>

        <!-- جدول الشهادات -->
        <div class="overflow-x-auto rounded-xl shadow-lg border border-gray-200">
            <table class="min-w-full bg-white table-fixed">
                <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="w-36 px-8 py-3 text-right">العمليات</th>
                    <th class="w-32 px-8 py-3 text-right">تاريخ الإنشاء</th>
                    <th class="w-24 px-8 py-3 text-right">الصورة</th>
                    <th class="w-2/5 px-4 py-3 text-right">الوصف</th>
                    <th class="w-1/4 px-4 py-3 text-right">العنوان</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                @foreach($certificates as $certificate)
                    <tr class="hover:bg-gray-50 transition text-gray-800 text-right">
                        <!-- العمليات -->
                        <td class="px-8 py-3 text-right align-middle">
                            <div class="flex gap-2 justify-end">
                                <form action="{{ route('certificate-delete', $certificate->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                                    @csrf
                                    <button type="submit"
                                            class="flex items-center gap-1 px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition">
                                        حذف
                                    </button>
                                </form>
                                <form action="{{ route('certificate-update-view', $certificate->id) }}" method="GET">
                                    <button type="submit"
                                            class="flex items-center gap-1 px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">
                                        تعديل
                                    </button>
                                </form>
                            </div>
                        </td>

                        <!-- تاريخ الإنشاء -->
                        <td class="px-8 py-3 text-gray-700 text-right align-middle">
                            {{ $certificate->created_at->format('Y-m-d') }}
                        </td>

                        <!-- الصورة -->
                        <td class="px-8 py-3 text-right align-middle">
                            @if($certificate->image)
                                <img src="{{ asset('public/storage/' . $certificate->image) }}"
                                     class="h-16 w-16 object-cover rounded-lg border border-gray-200" alt="غلاف">
                            @else
                                <span class="text-gray-400 italic">لا يوجد</span>
                            @endif
                        </td>

                        <!-- الوصف -->
                        <td class="px-4 py-3 text-gray-600 text-right align-middle">
                            <div class="whitespace-normal break-words">
                                {{ Str::limit($certificate->description, 80) }}
                            </div>
                        </td>

                        <!-- العنوان -->
                        <td class="px-4 py-3 font-semibold text-gray-900 text-right align-middle">
                            {{ $certificate->title }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
