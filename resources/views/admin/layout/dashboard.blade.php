<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <!-- أيقونة -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <title>لوحة التحكم</title>
    @vite('resources/css/app.css')
</head>

<body>


<div class="flex h-screen">

@include('admin.layout.header')
@include('admin.layout.sidebar')
</div>
</body>
</html>
