@extends('admin.layout.master')

@section('content')
    <div class="flex h-screen">
        @include('admin.layout.header')
        @include('admin.layout.sidebar')
    </div>

    {{-- شاشة الترحيب تظهر فقط لأول مرة --}}
    @if(isset($showWelcome) && $showWelcome)
        <div id="welcomeModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-md text-center animate-fade-in">
                <img src="{{ asset('resha.png') }}" alt="logo" class="w-20 mx-auto mb-4">
                <h1 class="text-2xl font-bold mb-2">مرحباً بك 👋</h1>
                <p class="text-gray-600 mb-6">لقد دخلت إلى <span class="font-semibold text-blue-600">لوحة التحكم</span></p>
                <button onclick="closeWelcome()"
                        class="px-6 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition">
                    دخول
                </button>
            </div>
        </div>
    @endif

    <script>
        function closeWelcome() {
            const modal = document.getElementById('welcomeModal');
            if(modal) modal.style.display = 'none';
        }
        setTimeout(() => closeWelcome(), 3000);
    </script>

    <style>
        @keyframes fadeIn { from {opacity:0; transform:scale(0.95);} to {opacity:1; transform:scale(1);} }
        .animate-fade-in { animation: fadeIn 0.4s ease-out; }
    </style>
@endsection
