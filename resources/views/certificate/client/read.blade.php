<div class="container mx-auto p-6">
    <div class="w-full text-center">

            {{ $certificate->title }}
        </h2>
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
