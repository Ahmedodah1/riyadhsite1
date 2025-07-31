<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتبتي</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

<nav class="bg-white shadow p-4 mb-6">
    <div class="container mx-auto text-xl font-bold">
        <a href="{{ route('books.index') }}">مكتبتي 📚</a>
    </div>
</nav>

<main class="container mx-auto px-4">
    @yield('content')
</main>

</body>
</html>
