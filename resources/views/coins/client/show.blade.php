@extends('layout.master')
@section('content')
    <div class="bg-gray-50 min-h-screen py-16 px-4 sm:px-10 lg:px-20">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-6">
            <!-- صورة المنتج -->
            <img src="{{ asset('storage/' . $coin->image) }}"
                 alt="{{ $coin->title }}"
                 class="w-full h-96 object-cover rounded-lg mb-6">

            <!-- العنوان -->
            <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $coin->title }}</h1>

            <!-- الوصف -->
            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                {{ $coin->description }}
            </p>

            <!-- مثال: إضافة سعر أو أي تفاصيل ثانية -->
            <div class="text-xl font-semibold text-blue-600 mb-6">
                السعر: {{ $coin->price ?? 'غير متوفر' }} ريال
            </div>

            <!-- زر رجوع -->
            <a href="{{ url()->previous() }}"
               class="inline-block bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                ← رجوع
            </a>
        </div>
    </div>
@endsection
