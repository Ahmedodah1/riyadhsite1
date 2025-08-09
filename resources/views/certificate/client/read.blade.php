    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">{{ $certificate->title }}</h1>

        <div class="rounded-xl overflow-hidden shadow-lg border">
            <iframe
                src="{{ route('certificate.pdf', $certificate->id) }}"
                width="100%"
                height="800px"
                class="w-full">
            </iframe>
        </div>
    </div>

    <div class="container mx-auto p-6 max-w-7xl ">
        <h1 style="text-align: center;" class="text-3xl font-extrabold mb-8 text-gray-900 dark:text-gray-100">
            {{ $certificate->title }}
        </h1>


    </div>
