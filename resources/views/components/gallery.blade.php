
<!-- Custom Style -->
<style>
    .lightbox {
        display: none;
        position: fixed;
        z-index: 999;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        overflow:hidden;
        background-color: rgba(0, 0, 0, 0.8);
    }
    .lightbox-image {
        display: block;
        margin: auto;
        max-width: 100%;
        max-height: 100%;
    }
    .close {
        color: #fff;
        font-size: 3em;
        position: absolute;
        top: 20px;
        right: 30px;
        cursor: pointer;
    }
    .gallery {
        width: 90vw;
        max-width: 1200px;
        margin: 0 auto;
        grid-template-rows: 1fr;
        grid-column-gap: 30px;
        grid-row-gap: 30px;

    }
    .gallery img {
        max-width: 100%;
        cursor: pointer;
    }
    .gallery img:hover {
        max-width: 100%;
        cursor: pointer;
    }
</style>
<section class="py-24 ">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
        <div class="grid gap-2.5 lg:pb-16 pb-10">
            <h2 class="w-full text-center text-gray-900 text-4xl font-bold font-manrope leading-normal">حكايات مصورة ومكتوبة</h2>
            <div class="w-full text-center text-gray-600 text-lg font-normal leading-8">رحلتي تبدأ من نظرتي الخاصة، حيث أرى الجمال في كل تفصيل وأعبّر عنه بفني</div>
        </div>
        <div class="gallery">
            <div class="flex flex-col mb-10">
                <div class="grid md:grid-cols-12 gap-8 lg:mb-11 mb-7">
                    <div class="relative md:col-span-4 md:h-[404px] h-[277px] w-full rounded-3xl overflow-hidden">
                        <img src="black1.png" alt="Gallery image" class="gallery-image object-cover rounded-3xl w-full h-full transition duration-700 ease-in-out" />
                        <div class="absolute inset-0 bg-blue-900 opacity-0 hover:opacity-30 transition duration-700 rounded-3xl"></div>
                    </div>

                    <div class="relative md:col-span-8 md:h-[404px] h-[277px] w-full rounded-3xl overflow-hidden">
                        <img src="black2.png" alt="Gallery image" class="gallery-image object-cover rounded-3xl w-full h-full transition duration-700 ease-in-out" />
                        <div class="absolute inset-0 bg-blue-500 opacity-0 hover:opacity-30 transition duration-700 rounded-3xl"></div>
                    </div>

                </div>
                <div class="grid md:grid-cols-3 grid-cols-1 gap-8">
                    <div class="relative h-[277px] w-full rounded-3xl overflow-hidden">
                        <img src="black3.png" alt="Gallery image" class="gallery-image object-cover rounded-3xl w-full h-full transition duration-700 ease-in-out" />
                        <div class="absolute inset-0 bg-blue-500 opacity-0 hover:opacity-30 transition duration-700 rounded-3xl"></div>
                    </div>

                    <div class="relative h-[277px] w-full rounded-3xl overflow-hidden">
                        <img src="black4.png" alt="Gallery image" class="gallery-image object-cover rounded-3xl w-full h-full transition duration-700 ease-in-out" />
                        <div class="absolute inset-0 bg-blue-500 opacity-0 hover:opacity-30 transition duration-700 rounded-3xl"></div>
                    </div>

                    <div class="relative h-[277px] w-full rounded-3xl overflow-hidden">
                        <img src="black5.png" alt="Gallery image" class="gallery-image object-cover rounded-3xl w-full h-full transition duration-700 ease-in-out" />
                        <div class="absolute inset-0 bg-blue-500 opacity-0 hover:opacity-30 transition duration-700 rounded-3xl"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="lightbox" id="lightbox">
        <span class="close" id="close">&times;</span>
        <img src="" alt="" class="lightbox-image" id="lightbox-image">
    </div>
    </div>
</section>
<!-- Initialize Swiper -->
<script>
    // Get references to elements
    const gallery = document.querySelector('.gallery');
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const closeButton = document.getElementById('close');

    // Add event listener to each image
    gallery.addEventListener('click', e => {
        if (e.target.classList.contains('gallery-image')) {
            const imageSrc = e.target.src;
            lightboxImage.src = imageSrc;
            lightbox.style.display = 'flex';
        }
    });

    // Close lightbox when close button is clicked
    closeButton.addEventListener('click', () => {
        lightbox.style.display = 'none';
    });

    // Close lightbox when clicking outside the image
    lightbox.addEventListener('click', e => {
        if (e.target === lightbox) {
            lightbox.style.display = 'none';
        }
    });
</script>
