@if($relatedCoins->count() > 0)
    <div class="max-w-6xl mx-auto mt-12 px-4 sm:px-6 lg:px-20">
        <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-6 text-center">
            عملات أخرى من {{ $coin->country }}
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($relatedCoins as $related)
                <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
                    <a href="{{ route('coins.show', $related->id) }}">
                        @if($related->image)
                            <img src="{{ asset('public/storage/' . $related->image) }}"
                                 alt="{{ $related->title }}"
                                 class="w-full h-48 object-cover hover:scale-105 transition duration-300">
                        @endif
                    </a>
                    <div class="p-4 text-right">
                        <h3 class="text-lg font-semibold text-gray-900 truncate">
                            {{ $related->title }}
                        </h3>
                        @if($related->description)
                            <p class="text-sm text-gray-600 mt-1 truncate">
                                {{ $related->description }}
                            </p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
