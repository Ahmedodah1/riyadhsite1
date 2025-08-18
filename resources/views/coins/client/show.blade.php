@extends('layout.master')
@section('content')
    <div x-data="{ open: false, image: '' }" class="relative">

    <div class="bg-gray-50 min-h-screen py-24 px-4 sm:px-6 lg:px-20 flex justify-center items-start">
        <div class="max-w-3xl w-full bg-white rounded-3xl shadow-xl p-8 transform -translate-y-8">
            <!-- صورة المنتج -->
            <img src="{{ asset('public/' . $coin->image) }}"
                 alt="{{ $coin->title }}"
                 class="w-full h-80 md:h-96 object-cover rounded-2xl mb-6 shadow-md">

            <!-- العنوان -->
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 text-center">{{ $coin->title }}</h1>

            <!-- الوصف -->
            <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6 text-justify">
                {{ $coin->description }}
            </p>

            <!-- السعر -->
            <div class="text-lg md:text-xl font-semibold text-blue-600 mb-6 text-center">
                السعر: {{ $coin->price ?? 'غير متوفر' }} ريال
            </div>

            <!-- زر الرجوع -->
            <div class="text-center">
                <a href="{{ url()->previous() }}"
                   class="inline-block bg-gray-700 text-white px-6 py-2 rounded-xl hover:bg-gray-800 transition font-medium">
                    ← رجوع
                </a>
            </div>
        </div>
    </div>
@endsection
