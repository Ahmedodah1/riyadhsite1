@extends('layout.master')
@section('content')

    <div class="bg-gray-50 min-h-screen py-24 px-4 sm:px-6 lg:px-20 flex justify-center items-start">
        <div class="max-w-3xl w-full bg-white rounded-3xl shadow-xl p-8 transform -translate-y-8">
            <!-- صورة العملة -->
            <img src="{{ asset('public/storage/' . $coin->image) }}"
                 alt="{{ $coin->title }}"
                 class="w-full h-80 md:h-96 object-cover rounded-2xl mb-6 shadow-md">

            <!-- العنوان -->
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 text-center">{{ $coin->title }}</h1>

            <!-- الوصف -->
            <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6 text-justify">
                {{ $coin->description }}
            </p>

            <p class="text-sm text-gray-500 mb-6 text-center">الدولة: {{ $coin->country }}</p>

            <!-- زر الرجوع -->
            <div class="text-center">
                <a href="{{ url()->previous() }}"
                   class="inline-block bg-gray-700 text-white px-6 py-2 rounded-xl hover:bg-gray-800 transition font-medium">
                    ← رجوع
                </a>
            </div>
        </div>
    </div>

    <!-- العملات المشابهة -->
    @if($relatedCoins->count() > 0)
        <div class="max-w-6xl mx-auto mt-12 px-4 sm:px-6 lg:px-20">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-6 text-center">
                عملات أخرى من {{ $coin->country }}
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($relatedCoins as $related)
                    <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
                        <a href="{{ route('coins.show', $related->id) }}">
                            <img src="{{ asset('public/storage/' . $related->image) }}"
                                 alt="{{ $related->title }}"
                                 class="w-full h-48 object-cover hover:scale-105 transition duration-300">
                        </a>
                        <div class="p-4 text-right">
                            <h3 class="text-lg font-semibold text-gray-900 truncate">
                                {{ $related->title }}
                            </h3>
                            <p class="text-sm text-gray-600 mt-1 truncate">
                                {{ $related->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

@endsection
