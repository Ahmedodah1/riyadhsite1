    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">{{ $certificate->title }}</h1>

        <div class="rounded-xl overflow-hidden shadow-lg border">
            <iframe
                src="{{ route('certificate.pdf', $certificate->id) }}"
                width="100%"
                height="800px"
                class="w-full">
            </iframe>
        </div>
    </div>

