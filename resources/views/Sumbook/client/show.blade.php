@extends('layout.master')

@section('content')
    <div class="a4-container mx-auto bg-white p-10 shadow-lg" style="width:210mm; min-height:297mm; padding:20mm;">
        {{-- عنوان الملخص --}}
        <h1 class="text-3xl font-bold text-center mb-6">{{ $sumbook->title }}</h1>

        {{-- صورة الملخص إذا وجدت --}}
        @if($sumbook->image)
            <img src="{{ asset('public/storage/' . $sumbook->image) }}"
                 alt="{{ $sumbook->title }}"
                 class="sumbook-image block mx-auto mb-6 rounded shadow"
                 style="max-width:100%; height:auto;">
        @endif

        {{-- محتوى الملخص --}}
        <div class="content text-lg leading-relaxed" style="line-height:1.6; font-size:16px;">
            {!! nl2br(e($sumbook->description)) !!}
        </div>
    </div>

    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        @media print {
            body {
                background: none;
            }
            .a4-container {
                box-shadow: none;
                margin: 0;
                width: auto;
                min-height: auto;
                padding: 0;
            }
        }
    </style>
@endsection
