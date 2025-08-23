@extends('layout.master')

@section('content')
    <div class="bg-gray-100 min-h-screen py-12 px-6 flex justify-center">
        <div class="w-full max-w-5xl relative"> {{-- محدد أقصى عرض --}}

            {{-- شريط علوي بار ممتد --}}
            <div class="w-full h-16 bg-gradient-to-r from-blue-500 to-green-500 flex items-center justify-center shadow-md rounded-t-xl">
                <span class="text-white text-xl font-bold">ملخص الكتاب</span>
            </div>

            {{-- البوكس الأبيض تحت البار --}}
            <div class="a4-container bg-white rounded-2xl shadow-xl mx-auto mt-6 p-12"
                 style="width:90%; min-height:297mm; padding:20mm;"> {{-- العرض 90% فقط --}}

                {{-- عنوان الملخص --}}
                <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-8 mt-6 tracking-wide" style="letter-spacing: 1px;">
                    {{ $sumbook->title }}
                </h1>

                {{-- صورة الملخص إذا وجدت --}}
                @if($sumbook->image)
                    <div class="flex justify-center mb-8">
                        <img src="{{ asset('public/storage/' . $sumbook->image) }}"
                             alt="{{ $sumbook->title }}"
                             class="sumbook-image rounded-xl shadow-lg transform hover:scale-105 transition duration-300"
                             style="max-width:70%; height:auto;">
                    </div>
                @endif

                {{-- محتوى الملخص --}}
                <div class="content text-gray-700 text-lg leading-relaxed" style="line-height:1.8; font-size:17px;">
                    {!! nl2br(e($sumbook->description)) !!}
                </div>

                {{-- شريط سفلي زخرفي --}}
                <div class="w-full h-12 bg-gradient-to-r from-green-400 to-blue-400 rounded-b-xl mt-12"></div>
            </div>
        </div>
    </div>

    <style>
        body {
            background: #f0f2f5;
            font-family: 'Arial', sans-serif;
        }
        @media print {
            body {
                background: none;
            }
            .a4-container {
                box-shadow: none;
                margin: 0 auto;
                width: auto;
                min-height: auto;
                padding: 20mm;
            }
        }
    </style>
@endsection
