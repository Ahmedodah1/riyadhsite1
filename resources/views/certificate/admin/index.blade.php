@extends('admin.layout.dashboard')

@section('content')

    <div class="p-6">
        <!-- زر إضافة شهادة -->
        <div class="mb-6">
            <a href="{{ route('certificate-create-view') }}"
               class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg font-medium shadow transition transform hover:scale-105 text-base">
                + إضافة شهادة جديدة
            </a>
        </div>

        <!-- جدول الشهادات -->
        <div class="overflow-x-auto rounded-lg shadow border border-gray-300">
            <table class="min-w-full bg-white table-fixed border-collapse border border-gray-300">
                <thead class="bg-gray-100 text-gray-700 border-b border-gray-300">
                <tr>
                    <th class="w-36 px-6 py-4 text-right text-base font-semibold border-l border-gray-300">العمليات</th>
                    <th class="w-32 px-6 py-4 text-right text-base font-semibold border-l border-gray-300">تاريخ الإنشاء</th>
                    <th class="w-24 px-6 py-4 text-center text-base font-semibold border-l border-gray-300">الصورة</th>
                    <th class="w-2/5 px-6 py-4 text-right text-base font-semibold border-l border-gray-300">الوصف</th>
                    <th class="w-1/4 px-6 py-4 text-right text-base font-semibold border-l border-gray-300">العنوان</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-800 text-base">
                @foreach($certificates as $certificate)
                    <tr class="hover:bg-gray-50 transition">
                        <!-- العمليات -->
                        <td class="px-6 py-4 text-right border border-gray-300 align-middle">
                            <div class="flex gap-3 justify-end">
                                <form action="{{ route('certificate-delete', $certificate->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                                    @csrf
                                    <button type="submit"
                                            class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition text-base font-medium">
                                        حذف
                                    </button>
                                </form>
                                <form action="{{ route('certificate-update-view', $certificate->id) }}" method="GET">
                                    <button type="submit"
                                            class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition text-base font-medium">
                                        تعديل
                                    </button>
                                </form>
                            </div>
                        </td>

                        <!-- تاريخ الإنشاء -->
                        <td class="px-6 py-4 text-right border border-gray-300 align-middle">
                            {{ $certificate->created_at->format('Y-m-d') }}
                        </td>

                        <!-- الصورة -->
                        <td class="px-6 py-4 text-center border border-gray-300 align-middle">
                            @if($certificate->image)
                                <img src="{{ asset('public/storage/' . $certificate->image) }}"
                                     class="h-24 w-24 object-cover rounded-lg border border-gray-200 mx-auto" alt="غلاف">
                            @else
                                <span class="text-gray-400 italic text-base">لا يوجد</span>
                            @endif
                        </td>

                        <!-- الوصف -->
                        <td class="px-6 py-4 text-right border border-gray-300 align-middle whitespace-normal break-words">
                            {{ Str::limit($certificate->description, 100) }}
                        </td>

                        <!-- العنوان -->
                        <td class="px-6 py-4 font-semibold text-gray-900 text-right border border-gray-300 align-middle">
                            {{ $certificate->title }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
