<div class="container mx-auto p-6">
    <div class="w-full text-center">
        <h1 class="inline-block text-3xl font-bold mb-6 text-gray-800 tracking-wide">
            {{ $certificate->title }}
        </h1>
    </div>

    <div class="rounded-xl overflow-hidden shadow-lg border">
        <iframe
            src="{{ route('certificate.pdf', $certificate->id) }}"
            width="100%"
            height="800px"
            class="w-full">
        </iframe>
    </div>
</div>
