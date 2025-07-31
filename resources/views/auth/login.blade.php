<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign in</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f0f4f8 0%, #d9e2ec 100%);
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }

        /* نقش خطوط ناعمة */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image:
                linear-gradient(rgba(0, 0, 0, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 0, 0, 0.03) 1px, transparent 1px);
            background-size: 30px 30px;
            pointer-events: none;
            z-index: 0;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
</head>
<body>

<form action="{{route('signin.post')}}" method="POST" class="relative z-10 bg-white p-8 rounded-3xl shadow-lg max-w-md w-full">
    @csrf
    <h2 class="text-3xl font-extrabold mb-8 text-center text-gray-900">تسجيل الدخول</h2>

    <div class="mb-6">
        <label for="email" class="block mb-2 font-semibold text-gray-700 text-right">البريد الإلكتروني</label>
        <input
            type="email"
            id="email"
            name="email"
            required
            placeholder="example@domain.com"
            class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-400 transition duration-300 text-gray-900"
        />
    </div>

    <div class="mb-8">
        <label for="password" class="block mb-2 font-semibold text-gray-700 text-right">كلمة المرور</label>
        <input
            type="password"
            id="password"
            name="password"
            required
            placeholder="••••••••"
            class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-400 transition duration-300 text-gray-900"
        />
    </div>

    <button
        type="submit"
        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-xl transition-colors duration-300 shadow-md shadow-indigo-300/50"
    >
        تسجيل الدخول
    </button>
</form>

</body>
</html>
