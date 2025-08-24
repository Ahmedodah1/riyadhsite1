@if(Route::currentRouteName() == 'dashboard')
    <!-- شاشة الترحيب -->
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

    <script>
        function closeWelcome() {
            document.getElementById('welcomeModal').style.display = 'none';
        }
        setTimeout(() => { closeWelcome(); }, 3000);
    </script>
@endif
