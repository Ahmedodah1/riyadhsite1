<div class="w-full p-6 flex justify-center">
    <h1 class="text-3xl font-bold mb-6 text-gray-800 tracking-wide text-center">
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


