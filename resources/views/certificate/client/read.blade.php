<div class=" text-center">
    <h1 class="text-center">
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


