<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>iPublish</title>
</head>

<body>

    <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>

    
    <!-- Hero -->
    <main class="pt-20">
        <div class="relative overflow-hidden">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
                <div
                    class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem]">
                </div>
                <div
                    class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem]">
                </div>
            </div>
            <!-- End Gradients -->

            <div class="relative z-10">
                <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                    <div class="max-w-2xl text-center mx-auto">
                        <p
                            class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-blue-600 to-violet-500 text-transparent">
                            iPublish: HKI dan Publikasi
                        </p>

                        <!-- Title -->
                        <div class="mt-5 max-w-2xl">
                            <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6x">
                                iPublish
                            </h1>
                        </div>
                        <!-- End Title -->

                        <div class="mt-5 max-w-3xl">
                            <p class="text-lg text-gray-600">iPublish adalah platform inovatif yang dirancang khusus
                                untuk program studi Informatika, memberikan kemudahan dalam mengelola dan mendata Hak
                                Kekayaan Intelektual (HKI) serta publikasi mahasiswa.</p>
                        </div>

                        <!-- Buttons -->
                        <div class="mt-8 gap-3 flex justify-center">
                            <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                href="/login">
                                Login
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                        </div>
                        <!-- End Buttons -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Features -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                <div class="lg:col-span-7">
                    <!-- Grid -->
                    <div class="grid grid-cols-12 gap-2 sm:gap-6 items-center lg:-translate-x-10">
                        <div class="col-span-4">
                            <img class="rounded-xl"
                                src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80"
                                alt="Features Image">
                        </div>
                        <!-- End Col -->

                        <div class="col-span-3">
                            <img class="rounded-xl"
                                src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80"
                                alt="Features Image">
                        </div>
                        <!-- End Col -->

                        <div class="col-span-5">
                            <img class="rounded-xl"
                                src="https://images.unsplash.com/photo-1600194992440-50b26e0a0309?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80"
                                alt="Features Image">
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Col -->

                <div class="mt-5 sm:mt-10 lg:mt-0 lg:col-span-5">
                    <div class="space-y-6 sm:space-y-8">
                        <!-- Title -->
                        <div class="space-y-2 md:space-y-4">
                            <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                                Selamat datang di iPublish
                            </h2>
                            <p class="text-gray-500">
                                Dengan iPublish, Anda dapat:
                            </p>
                        </div>
                        <!-- End Title -->

                        <!-- List -->
                        <ul class="space-y-2 sm:space-y-4">
                            <li class="flex gap-x-3">
                                <span
                                    class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base text-gray-500">
                                        <span class="font-bold">Mengelola HKI</span> – Catat dan pantau semua hak
                                        kekayaan intelektual yang dihasilkan oleh mahasiswa.
                                    </span>
                                </div>
                            </li>

                            <li class="flex gap-x-3">
                                <span
                                    class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base text-gray-500">
                                        <span class="font-bold">Mendata Publikasi</span> - Simpan dan atur semua
                                        publikasi akademik dan penelitian mahasiswa secara efisien, termasuk artikel,
                                        jurnal, dan konferensi.
                                    </span>
                                </div>
                            </li>

                            <li class="flex gap-x-3">
                                <span
                                    class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base text-gray-500">
                                        <span class="font-bold">Mempermudah Akses</span> - Akses informasi penting
                                        kapan saja dan di mana saja, dengan antarmuka yang ramah pengguna dan sistem
                                        yang terintegrasi.
                                    </span>
                                </div>
                            </li>
                        </ul>
                        <!-- End List -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Features -->

        <!-- Contact -->
        <div class="max-w-7xl px-4 lg:px-6 py-12 lg:py-24 mx-auto">
            <div class="mb-6 sm:mb-10 max-w-2xl text-center mx-auto">
                <h2 class="font-medium text-black text-3xl lg:text-4xl">
                    Kontak
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 lg:items-center gap-6 md:gap-8 lg:gap-12">
                <div class="aspect-w-16 aspect-h-6 lg:aspect-h-14 overflow-hidden bg-gray-100 rounded-2xl">
                    <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl"
                        src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?q=80&w=560&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Contacts Image">
                </div>
                <!-- End Col -->

                <div class="space-y-8 lg:space-y-16">
                    <div>
                        <h3 class="mb-5 font-semibold text-black">
                            Alamat
                        </h3>

                        <!-- Grid -->
                        <div class="flex gap-4 w-full">
                            <svg class="shrink-0 size-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <div class="flex-grow">
                                <p class="text-sm text-gray-600">Bali, Indonesia</p>
                                <address class="mt-1 text-black not-italic w-full">Jl. Kampus Bukit Jimbaran Computer
                                    Science Building Jurusan Ilmu Komputer, Jimbaran, Badung, Badung Regency, Bali 80361
                                </address>
                            </div>
                        </div>
                        <!-- End Grid -->
                    </div>

                    <div>
                        <h3 class="mb-5 font-semibold text-black">
                            Kontak Kami
                        </h3>

                        <!-- Grid -->
                        <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
                            <div class="flex gap-4">
                                <svg class="shrink-0 size-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z">
                                    </path>
                                    <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"></path>
                                </svg>

                                <div class="grow">
                                    <p class="text-sm text-gray-600 ">
                                        Email
                                    </p>
                                    <p>
                                        <a class="relative inline-block font-medium text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 hover:before:bg-black focus:outline-none focus:before:bg-black "
                                            href="mailto:example@site.so">
                                            informatika@unud.ac.id
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <svg class="shrink-0 size-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>

                                <div class="grow">
                                    <p class="text-sm text-gray-600">
                                        Telepon
                                    </p>
                                    <p>
                                        <a class="relative inline-block font-medium text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 hover:before:bg-black focus:outline-none focus:before:bg-black"
                                            href="mailto:example@site.so">
                                            +62 821 4582 1730
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Grid -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
        </div>
        <!-- End Contact -->

        <!-- ========== FOOTER ========== -->
        <footer class="w-full max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-6 border-t border-gray-200">
                <div class="flex flex-wrap justify-between items-center gap-2">
                    <div>
                        <p class="text-xs text-gray-600 ">
                            © 2024 Udayana Informatics.
                        </p>
                    </div>
                    <!-- End Col -->

                    <!-- List -->
                    <ul class="flex flex-wrap items-center">
                        <li
                            class="inline-block relative pe-4 text-xs last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-1.5 before:-translate-y-1/2 before:size-[3px] before:rounded-full before:bg-gray-400">
                            <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2"
                                href="#">
                                X (Twitter)
                            </a>
                        </li>
                        <li
                            class="inline-block relative pe-4 text-xs last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-1.5 before:-translate-y-1/2 before:size-[3px] before:rounded-full before:bg-gray-400 ">
                            <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2"
                                href="#">
                                Facebook
                            </a>
                        </li>
                        <li class="inline-block pe-4 text-xs">
                            <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 "
                                href="#">
                                Github
                            </a>
                        </li>
                        <li class="inline-block">
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
        </footer>
        <!-- ========== END FOOTER ========== -->

    </main>

</body>

</html>
<?php /**PATH C:\laragon\www\PEEKAEL\resources\views/home.blade.php ENDPATH**/ ?>