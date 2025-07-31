<section class="py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col justify-center items-center gap-x-16 gap-y-5 xl:gap-28 lg:flex-row lg:justify-between max-lg:max-w-2xl mx-auto max-w-full">
            <div class="w-full lg:w-1/2">
                <img
                    src="7879.jpg"
                    alt="FAQ tailwind section"
                    class="w-full rounded-xl object-cover"
                />
            </div>
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-xl">
                    <div class="mb-6 lg:mb-16">
                        <h6 class="text-lg text-center font-medium text-indigo-900 mb-2 lg:text-right">
                            الأسئلة الشائعة
                        </h6>
                        <h2 class="text-4xl text-center font-bold text-gray-900 leading-[3.25rem] mb-5 lg:text-right">
                            هل تبحث عن معلومات إضافية؟


                        </h2>
                    </div>

                    <div class="accordion-group space-y-6">
                        <!-- السؤال 1 -->
                        <div class="accordion border-b border-gray-200 pb-6">
                            <button class="accordion-toggle flex justify-between items-center w-full text-xl text-gray-700 font-medium hover:text-indigo-900 transition">
                                <span>كيف يمكنني استعراض الكتب والصور؟
</span>
                                <svg class="w-6 h-6 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="accordion-content mt-4 text-gray-500 text-base">
                                يمكنك تصفح المكتبة والاطلاع على كل الأعمال بسهولة من خلال الأقسام أو البحث في الموقع.

                            </div>
                        </div>

                        <!-- السؤال 2 -->
                        <div class="accordion border-b border-gray-200 pb-6">
                            <button class="accordion-toggle flex justify-between items-center w-full text-xl text-gray-700 font-medium hover:text-indigo-900 transition">
                                <span>هل يمكنني شراء أو تحميل الكتب أو الصور؟</span>
                                <svg class="w-6 h-6 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="accordion-content mt-4 text-gray-500 text-base">
                                في الوقت الحالي، المحتوى للعرض فقط، لكن قد نوفر خيارات للشراء أو التنزيل مستقبلاً.
                            </div>
                        </div>
                        <!-- السؤال 3 -->
                        <div class="accordion border-b border-gray-200 pb-6">
                            <button class="accordion-toggle flex justify-between items-center w-full text-xl text-gray-700 font-medium hover:text-indigo-900 transition">
                                <span>هل كل الأعمال معروضة هي من إبداع صاحب الموقع؟</span>
                                <svg class="w-6 h-6 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="accordion-content mt-4 text-gray-500 text-base">
                                نعم، جميع الكتب والصور المعروضة هي من إنتاج وإبداع صاحب الموقع.

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS -->
<style>
    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease;
    }

    .accordion.active .accordion-content {
        max-height: 500px;
    }

    .accordion.active .accordion-toggle svg {
        transform: rotate(180deg);
    }
</style>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const accordions = document.querySelectorAll(".accordion");

        accordions.forEach((accordion) => {
            const toggle = accordion.querySelector(".accordion-toggle");
            const content = accordion.querySelector(".accordion-content");

            toggle.addEventListener("click", function () {
                const isActive = accordion.classList.contains("active");

                // أغلق الكل
                document.querySelectorAll(".accordion").forEach((acc) => {
                    acc.classList.remove("active");
                    acc.querySelector(".accordion-content").style.maxHeight = null;
                });

                // افتح الحالي
                if (!isActive) {
                    accordion.classList.add("active");
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });
    });
</script>
