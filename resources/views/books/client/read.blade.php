@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">

        <!-- عنوان الكتاب -->
        <h1 class="text-lg sm:text-xl md:text-2xl font-bold mb-3 text-center">
            {{ $book->title }}
        </h1>

        <!-- أدوات التحكم -->
        <div class="flex items-center justify-center gap-2 mb-3">
            <button id="prev"
                    class="px-3 py-1 rounded bg-gray-800 text-white disabled:opacity-40">
                ◀
            </button>

            <span class="text-sm">
            صفحة <span id="page-num">1</span> / <span id="page-count">?</span>
        </span>

            <button id="next"
                    class="px-3 py-1 rounded bg-gray-800 text-white disabled:opacity-40">
                ▶
            </button>

            <button id="zoom-in"
                    class="px-3 py-1 rounded bg-yellow-400 text-black font-bold">
                ＋
            </button>

            <button id="zoom-out"
                    class="px-3 py-1 rounded bg-yellow-400 text-black font-bold">
                －
            </button>
        </div>

        <!-- عارض PDF -->
        <div class="rounded-xl overflow-hidden shadow-lg border
                h-[75vh] sm:h-[80vh] md:h-[800px]
                bg-gray-100 flex items-center justify-center">

            <canvas id="pdf-canvas" class="max-w-full"></canvas>

        </div>
    </div>

    <!-- PDF.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js"></script>

    <script>
        pdfjsLib.GlobalWorkerOptions.workerSrc =
            'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

        const url = "{{ route('books.pdf', $book->id) }}";

        let pdfDoc = null;
        let pageNum = 1;
        let pageCount = 0;
        let scale = 1.2;
        let rendering = false;

        const canvas = document.getElementById('pdf-canvas');
        const ctx = canvas.getContext('2d');

        const pageNumEl = document.getElementById('page-num');
        const pageCountEl = document.getElementById('page-count');

        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');
        const zoomInBtn = document.getElementById('zoom-in');
        const zoomOutBtn = document.getElementById('zoom-out');

        function renderPage(num) {
            rendering = true;

            pdfDoc.getPage(num).then(page => {
                const viewport = page.getViewport({ scale });

                canvas.width = viewport.width;
                canvas.height = viewport.height;

                const renderTask = page.render({
                    canvasContext: ctx,
                    viewport
                });

                renderTask.promise.then(() => {
                    rendering = false;
                    pageNumEl.textContent = num;
                    prevBtn.disabled = (num <= 1);
                    nextBtn.disabled = (num >= pageCount);
                });
            });
        }

        pdfjsLib.getDocument(url).promise.then(pdf => {
            pdfDoc = pdf;
            pageCount = pdf.numPages;
            pageCountEl.textContent = pageCount;
            renderPage(pageNum);
        });

        // أزرار التنقل
        prevBtn.onclick = () => {
            if (pageNum <= 1 || rendering) return;
            pageNum--;
            renderPage(pageNum);
        };

        nextBtn.onclick = () => {
            if (pageNum >= pageCount || rendering) return;
            pageNum++;
            renderPage(pageNum);
        };

        // Zoom
        zoomInBtn.onclick = () => {
            scale = Math.min(scale + 0.2, 3);
            rend
