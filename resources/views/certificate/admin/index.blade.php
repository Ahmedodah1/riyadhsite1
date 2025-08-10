@extends('admin.layout.dashboard')

@section('content')

    <div class="p-6">

        <!-- خط فاصل خفيف قبل الجدول -->
        <div class="border-b border-gray-300 mb-6"></div>

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
                    <th class="w-36 px-8 py-3 text-right text-sm font-semibold">العمليات</th>
                    <th class="w-32 px-8 py-3 text-right text-sm font-semibold">تاريخ الإنشاء</th>
                    <th class="w-24 px-8 py-3 text-right text-sm font-semibold">الصورة</th>
                    <th class="w-2/5 px-4 py-3 text-right text-sm font-semibold">الوصف</th>
                    <th class="w-1/4 px-4 py-3 text-right text-sm font-semibold">العنوان</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                @foreach($certificates as $certificate)
                    <tr class="hover:bg-gray-50 transition text-gray-800 text-right align-middle">
                        <!-- العمليات -->
                        <td class="px-8 py-3 text-right align-middle">
                            <div class="flex gap-2 justify-end">
                                <form action="{{ route('certificate-delete', $certificate->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                                    @csrf
                                    <button type="submit"
                                            class="flex items-center gap-1 px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition text-xs sm:text-sm">
                                        حذف
                                    </button>
                                </form>
                                <form action="{{ route('certificate-update-view', $certificate->id) }}" method="GET">
                                    <button type="submit"
                                            class="flex items-center gap-1 px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition text-xs sm:text-sm">
                                        تعديل
                                    </button>
                                </form>
                            </div>
                        </td>

                        <!-- تاريخ الإنشاء -->
                        <td class="px-8 py-3 text-gray-700 text-right align-middle text-sm">
                            {{ $certificate->created_at->format('Y-m-d') }}
                        </td>

                        <!-- الصورة -->
                        <td class="px-8 py-3 text-right align-middle">
                            @if($certificate->image)
                                <img src="{{ asset('public/storage/' . $certificate->image) }}"
                                     class="h-20 w-20 object-cover rounded-lg border border-gray-200" alt="غلاف">
                            @else
                                <span class="text-gray-400 italic text-sm">لا يوجد</span>
                            @endif
                        </td>

                        <!-- الوصف -->
                        <td class="px-4 py-3 text-gray-600 text-right align-middle whitespace-normal break-words text-sm">
                            {{ Str::limit($certificate->description, 80) }}
                        </td>

                        <!-- العنوان -->
                        <td class="px-4 py-3 font-semibold text-gray-900 text-right align-middle text-sm">
                            {{ $certificate->title }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
