@extends('layout.master')
@section('content')

    <div class="bg-gray-50 min-h-screen py-24 px-4 sm:px-6 lg:px-20 flex flex-col items-center">

        {{-- بطاقة العملة الرئيسية --}}
        <div class="max-w-3xl w-full bg-white rounded-3xl shadow-xl p-8 transform -translate-y-8 hover:shadow-2xl transition-shadow duration-300">
            {{-- صورة العملة --}}
            @if($coin->image)
                <img src="{{ asset('public/storage/' . $coin->image) }}"
                     alt="{{ $coin->title }}"
                     class="w-full h-80 md:h-96 object-cover rounded-2xl mb-6 shadow-lg hover:scale-105 transition-transform duration-300">
            @endif

            {{-- العنوان --}}
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4 text-center">{{ $coin->title }}</h1>

            {{-- الوصف --}}
            @if($coin->description)
                <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6 text-justify">
                    {{ $coin->description }}
                </p>
            @endif

            {{-- الدولة --}}
            <p class="text-sm md:text-base text-gray-500 mb-6 text-center font-medium">الدولة: {{ $coin->country }}</p>

            {{-- زر الرجوع --}}
            <div class="text-center">
                <a href="{{ url()->previous() }}"
                   class="inline-block bg-gray-700 text-white px-6 py-2 rounded-xl hover:bg-gray-800 transition font-medium shadow hover:shadow-lg">
                    ← رجوع
                </a>
            </div>
        </div>

        {{-- العملات المشابهة --}}
        @if($coin->relatedCoins->count() > 0)
            <div class="max-w-6xl w-full mt-12 px-4 sm:px-6 lg:px-20">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 text-center">
                    عملات أخرى من {{ $coin->country }}
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach($coin->relatedCoins as $related)
                        <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1 duration-300 overflow-hidden">
                            <a href="{{ route('coins.show', $related->id) }}">
                                @if($related->image)
                                    <img src="{{ asset('public/storage/' . $related->image) }}"
                                         alt="{{ $related->title }}"
                                         class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                                @endif
                            </a>
                            <div class="p-4 text-right">
                                <h3 class="text-lg md:text-xl font-semibold text-gray-900 truncate">
                                    {{ $related->title }}
                                </h3>
                                @if(!empty($related->description))
                                    <p class="text-sm md:text-base text-gray-600 mt-1 line-clamp-2">
                                        {{ $related->description }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>

@endsection
