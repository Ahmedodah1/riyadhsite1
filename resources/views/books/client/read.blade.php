<div class="container mx-auto p-4">

    <!-- عنوان الكتاب -->
    <h1 class="text-lg sm:text-xl md:text-2xl font-bold mb-4 text-center">
        {{ $book->title }}
    </h1>

    <!-- حاوية عرض PDF -->
    <div class="rounded-xl overflow-hidden shadow-lg border
                h-[75vh] sm:h-[80vh] md:h-[800px] bg-gray-100
                flex items-center justify-center">

        <!-- Canvas -->
        <canvas id="pdf-canvas" class="max-w-full"></canvas>

    </div>

</div>

<!-- PDF.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js"></script>

<script>
    // إعداد الـ worker
    pdfjsLib.GlobalWorkerOptions.workerSrc =
        'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

    // رابط ملف الـ PDF
    const url = "{{ route('books.pdf', $book->id) }}";

    const canvas = document.getElementById('pdf-canvas');
    const ctx = canvas.getContext('2d');

    let pdfDoc = null;
    let pageNum = 1;
    let scale = 1.3;

    // تحميل الملف
    pdfjsLib.getDocument(url).promise.then(function (pdf) {
        pdfDoc = pdf;
        renderPage(pageNum);
    });

    // عرض الصفحة
    function renderPage(num) {
        pdfDoc.getPage(num).then(function (page) {

            const viewport = page.getViewport({ scale: scale });

            canvas.width = viewport.width;
            canvas.height = viewport.height;

            page.render({
                canvasContext: ctx,
                viewport: viewport
            });
        });
    }

    // تعطيل كليك يمين
    document.addEventListener('contextmenu', e => e.preventDefault());
</script>
