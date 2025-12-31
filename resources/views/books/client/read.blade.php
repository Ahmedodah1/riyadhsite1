@extends('layouts.app')

@section('content')
    <div class="fixed inset-0 bg-gradient-to-br from-gray-50 to-gray-100
            flex items-center justify-center">

        <div class="w-full max-w-6xl px-6 text-center">

            <!-- العنوان -->
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-10">
                {{ $book->title }}
            </h1>

            <!-- Desktop -->
            <div class="hidden md:block
                    rounded-2xl overflow-hidden
                    bg-white
                    shadow-2xl
                    border border-gray-200
                    h-[80vh]">

                <iframe
                    src="{{ route('books.pdf', $book->id) }}"
                    class="w-full h-full border-0"
                    allowfullscreen>
                </iframe>
            </div>

            <!-- Mobile -->
            <div class="md:hidden mt-12">
                <a href="{{ route('books.pdf', $book->id) }}"
                   target="_blank"
                   class="inline-flex items-center justify-center
                      px-10 py-5 rounded-2xl
                      bg-yellow-400
                      text-black text-lg font-semibold
                      shadow-lg hover:scale-105 transition">
                    📖 فتح الملف
                </a>
            </div>

        </div>
    </div>
@endsection
