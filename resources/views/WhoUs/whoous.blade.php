@extends('layout.master')

@section('content')
    <div class="min-h-screen flex flex-col items-center bg-gray-100 px-4 sm:px-7">
        <div class="text-center mb-10 mt-20 sm:mt-40">
            <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold text-blue-900 mb-4 sm:mb-6">
                <span>{{ $notes->title }}</span>
            </h1>
            <div class="border-b-4 border-blue-600 w-16 sm:w-24 mx-auto mt-2"></div>
        </div>

        <div class="relative w-full max-w-2xl sm:max-w-4xl lg:max-w-7xl bg-white rounded-lg p-5 sm:p-9 border border-gray-200 hover:scale-105 duration-300 ease-in-out transform mb-10 sm:mb-20">

            <div class="flex justify-center">
                <img src="{{ asset('public/storage/' . $notes->image) }}"
                     class="w-24 h-24 sm:w-36 sm:h-36 rounded-full shadow-lg border-4 border-white object-cover">
            </div>

            <div class="text-gray-700 text-base sm:text-lg leading-relaxed text-justify space-y-4 sm:space-y-6 mt-6 sm:mt-8 font-bold">
                <span>{!! $notes->content !!}</span>
            </div>

        </div>
    </div>
@endsection
