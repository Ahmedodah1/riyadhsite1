<nav id="nav" class="fixed left-0 w-full px-5 py-3 bg-transparent text-white transition-colors duration-300">
    <div class="flex justify-between items-center container mx-auto relative">
        <a href="" class="flex items-center gap-3">
            <span id="logo-text" class="text-lg font-bold lg:text-3xl mt-1"></span>
            <img src="resha.png" alt="Logo" class=" w-30">
        </a>

        <div class="lg:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <span class="material-icons">menu</span>
            </button>
        </div>

        <div class=" {{!request()->is('/') ? 'text-black' : 'text-white'}} hidden lg:flex flex-col md:flex-row items-center justify-center gap-8 md:static absolute w-full md:w-auto p-4 md:p-0 z-20 top-full left-0 md:top-auto md:left-auto"
             :class="{'text-white': !scrolled, 'text-black': scrolled}">
            <style>
                .nav-link {
                    @apply hover:no-underline transition-all duration-300 hover:text-gray-300 transform hover:scale-105;
                }
            </style>

            <div>
                <a href="{{route('homepage')}}" class="nav-link">الرئيسية</a>
            </div>

            <div class="relative group">
                <a href="/whous" class="nav-link flex items-center space-x-1">
                    <span>من آنا</span>
                </a>
            </div>

            <div class="relative group">
                <a href="{{route('books.index')}}" class="nav-link flex items-center">
                    <span>{{ __('site.books') }}</span>
                </a>
            </div>

            <div class="relative group">
                <a href="#" class="nav-link flex items-center">
                    <span>تصويري </span>
                    <span class="material-icons transform group-hover:rotate-180 transition-transform">expand_more</span>
                </a>
                <div class="absolute left-0 mt-2 w-48 bg-white text-black rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity z-10">
                    <a href="{{route('ClientBlackAndWhite')}}" class="block px-4 py-2 hover:bg-gray-100 nav-link">صور آبيض وآسود</a>
                    <a href="{{route('colorphotos')}}" class="block px-4 py-2 hover:bg-gray-100 nav-link">صور ملونه</a>
                </div>
            </div>




            <div class="relative group">
                <a href="{{route('decor')}}" class="nav-link flex items-center">
                    <span> صور الديكورات </span>
                    <span class="material-icons transform group-hover:rotate-180 transition-transform">expand_more</span>
                </a>
                <div class="absolute left-0 mt-2 w-48 bg-white text-black rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity z-10">
                    <a href="{{route('ClientBlackAndWhite')}}" class="block px-4 py-2 hover:bg-gray-100 nav-link">صور آبيض وآسود</a>
                    <a href="{{route('colorphotos')}}" class="block px-4 py-2 hover:bg-gray-100 nav-link">صور ملونه</a>
                </div>
            </div>



            <div class="relative group">
                <a href="{{route('paintings')}}" class="nav-link flex items-center">
                    <span>معرض اللوحات</span>
                </a>
            </div>

            <div class="relative group">
                <a href="{{route('certificate')}}" class="nav-link flex items-center">
                    <span>الشهادات والدورات</span>
                </a>
            </div>

            <div class="relative group">
                <a href="{{route('blog')}}" class="nav-link flex items-center">
                    <span>الإنجازات الهندسية</span>
                </a>
            </div>

            <div>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link">LogOut</button>
                    </form>
                @endif
            </div>

        </div>

        <div class="group hidden lg:block">



        </div>
    </div>
</nav>

<div id="menu"
     class="fixed top-0 left-0 w-full h-1/2 p-4 bg-black text-white shadow-lg z-30 hidden flex-col gap-9 items-start justify-start pt-10 lg:hidden overflow-y-auto">

    <div class="mt-7">
        <a href="" class="hover:underline">الرئيسية</a>
    </div>
    <div class="relative group">
        <a href="#" class="hover:underline flex items-center space-x-1">
            <span>من آنا</span>
        </a>
        <div
            class="absolute right-0 mt-2 w-40 bg-white text-black rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">

        </div>
    </div>
    <div class="relative group">
        <a href="#" class="hover:underline flex items-center space-x-1">
            <span>الكتب</span>
        </a>
        <div
            class="absolute right-0 mt-2 w-40 bg-white text-black rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">

        </div>
    </div>
    <div class="relative group">
        <a href="#" class="hover:underline flex items-center space-x-1">
            <span> تصويري</span>
            <span class="material-icons transform group-hover:rotate-180 transition-transform">expand_more</span>
        </a>
        <div
            class="absolute right-0 mt-2 w-60 bg-white text-black rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
            <a href="" class="block px-4 py-2 hover:bg-gray-100">صور آسود وآبيض</a>
            <a href="" class="block px-4 py-2 hover:bg-gray-100">صور ملونة</a>

        </div>
    </div>
    <div>
        <a href="" class="hover:underline">صور الديكورات </a>
    </div>
    <div>
        <a href="" class="hover:underline">معرض اللوحات</a>
    </div>

    <div>
        <a href="" class="hover:underline">الشهادات والدورات</a>
    </div>
    <div>
        <a href="" class="hover:underline">الإنجازات الهندسية</a>
    </div>
</div>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    const logoText = document.getElementById('logo-text');
    const navLinksContainer = document.querySelector('nav > div > div.hidden.lg\\:flex');

    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY || window.pageYOffset;
        if (scrollPosition > 50) {
            document.getElementById('nav').classList.add('navbar-scrolled');
        } else {
            document.getElementById('nav').classList.remove('navbar-scrolled');
        }
    });
</script>

<style>
    nav {
        z-index: 500;
        padding: 1rem;
        transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
        background-color: transparent;
        color: white;
    }

    nav.navbar-scrolled {
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        color: black !important;
    }

    nav.navbar-scrolled a,
    nav.navbar-scrolled span,
    nav.navbar-scrolled button {
        color: black !important;
    }
</style>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
