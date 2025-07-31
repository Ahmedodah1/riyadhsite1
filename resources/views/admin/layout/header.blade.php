<div class="flex-1 flex flex-col min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md transition">
                تسجيل خروج
            </button>
        </form>

        <div class="flex items-center gap-4">
            <!-- الساعة -->
            <div id="clock" class="text-gray-600 font-mono text-lg"></div>

            <!-- دائرة فيها أول حرف -->
            <div class="w-10 h-10 rounded-full bg-indigo-600 flex items-center justify-center text-white font-semibold text-lg">
                R
            </div>
            <span class="text-gray-800 text-lg font-medium">مرحبًا، رياض</span>
        </div>
    </header>

    <!-- Main content -->
    <main class="p-6 overflow-y-auto">
        @yield('content')
    </main>
</div>

<!-- سكربت الساعة -->
<script>
    function updateClock() {
        const now = new Date();

        // تحويل الوقت إلى توقيت السعودية (UTC+3)
        const saudiTime = new Date(now.getTime() + (3 * 60 * 60 * 1000));

        let hours = saudiTime.getUTCHours();
        const minutes = String(saudiTime.getUTCMinutes()).padStart(2, '0');
        const seconds = String(saudiTime.getUTCSeconds()).padStart(2, '0');

        const ampm = hours >= 12 ? 'PM' : 'Am';
        hours = hours % 12;
        hours = hours === 0 ? 12 : hours; // تحويل 0 إلى 12

        document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds} ${ampm}`;
    }

    setInterval(updateClock, 1000);
    updateClock(); // تشغيل الساعة مباشرة
</script>

