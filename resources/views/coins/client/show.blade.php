@extends('layout.master')
@section('content')



        {{-- مسافة بين البطاقة الرئيسية والعملات المشابهة --}}
        <div class="w-full max-w-6xl border-t border-gray-200"></div>

        {{-- العملات المشابهة --}}
        @if($coin->relatedCoins->count() > 0)
            <div class="max-w-6xl w-full px-4 sm:px-6 lg:px-20">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-10 text-center">
                    عملات أخرى من {{ $coin->country }}
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach($coin->relatedCoins as $related)
                        <div class="bg-white rounded-3xl shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 overflow-hidden group">
                            <a href="{{ route('coins.show', $related->id) }}">
                                @if($related->image)
                                    <img src="{{ asset('public/storage/' . $related->image) }}"
                                         alt="{{ $related->title }}"
                                         class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300">
                                @endif
                            </a>
                            <div class="p-5 text-right">
                                <h3 class="text-lg md:text-xl font-semibold text-gray-900 truncate mb-1">
                                    {{ $related->title }}
                                </h3>
                                @if(!empty($related->description))
                                    <p class="text-sm md:text-base text-gray-600 line-clamp-2">
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
