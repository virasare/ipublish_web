<x-user-layout>
    <x-slot name="header">
        {{ __('Pengajuan') }}
    </x-slot>

    <style>
        body {
            background-color: #F9FAFB;
        }
    </style>
    @include('components.toast')
    <div class="w-full pt-4 px-2 sm:px-4 md:px-10 lg:ps-80 mx-auto">
        <div class="p-4 bg-white rounded-lg shadow-md">
            <!-- Stepper -->
            <div id="stepper" data-hs-stepper='{"currentIndex": 1}'>
                <!-- Stepper Nav -->
                <ul class="relative flex flex-row gap-x-2">
                    <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                        data-hs-stepper-nav-item='{"index": 1} '>
                        <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                            <span
                                class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 ">
                                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">1</span>
                                <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                            <span class="ms-2 text-sm font-medium text-gray-800">
                                Data diri
                            </span>
                        </span>
                        <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
                    </li>
                    <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                        data-hs-stepper-nav-item='{"index": 2}'>
                        <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                            <span
                                class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
                                <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                            <span class="ms-2 text-sm font-medium text-gray-800">
                                Pengajuan berkas
                            </span>
                        </span>
                        <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
                    </li>
                    <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                        data-hs-stepper-nav-item='{"index": 3}'>
                        <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                            <span
                                class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
                                <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                            <span class="ms-2 text-sm font-medium text-gray-800">
                                Konfirmasi
                            </span>
                        </span>
                        <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
                    </li>
                </ul>
                <!-- End Stepper Nav -->

                <!-- Stepper Content -->
                <div class="mt-5 sm:mt-8">
                    <!-- First Content -->
                    <div data-hs-stepper-content-item='{"index": 1}' class="step-content">
                        <div
                            class="p-4 bg-gray-50 flex justify-center items-center border border-dashed border-gray-200 rounded-xl overflow-auto">
                            <form>
                                <!-- Section -->
                                <div
                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                                    <div class="sm:col-span-12">
                                        <h2 class="text-lg font-semibold text-gray-800">
                                            Tentang HKI
                                        </h2>
                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-12">
                                        <h2 class="flex-1 text-sm font-medium text-gray-500 mt-2.5">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nulla
                                            molestiae voluptatibus aliquid numquam quidem, deleniti quam et enim quo,
                                            sunt hic, iusto quas sed nam voluptatem praesentium amet ratione!
                                        </h2>
                                    </div>
                                    <div class="sm:col-span-12">
                                        <h2 class="flex-1 text-sm font-medium text-gray-500 mt-2.5">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nulla
                                            molestiae voluptatibus aliquid numquam quidem, deleniti quam et enim quo,
                                            sunt hic, iusto quas sed nam voluptatem praesentium amet ratione!
                                        </h2>
                                    </div>
                                    <!-- End Col -->
                                </div>


                                <!-- Section -->
                                <div
                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                                    <div class="sm:col-span-12">
                                        <h2 class="text-lg font-semibold text-gray-800">
                                            Informasi pribadi
                                        </h2>
                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-3">
                                        <label for="af-submit-application-penguji-1"
                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Kelompok
                                        </label>
                                    </div>
                                    <!-- End Col -->


                                    <div class="sm:col-span-9">
                                        <select id="af-submit-application-penguji-1"
                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <option disabled selected class="text-gray-500">Pilih</option>
                                            <option value="1">Ganjil</option>
                                            <option value="2">Genap</option>
                                        </select>
                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-3">
                                        <label for="af-submit-application-full-name"
                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Nama lengkap
                                        </label>
                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">
                                        <input id="af-submit-application-full-name" type="text"
                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-3">
                                        <label for="af-submit-application-nim"
                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            NIM
                                        </label>
                                    </div>
                                    <!-- End Col -->

                                    <div class="sm:col-span-9">
                                        <input id="af-submit-application-nim" type="text"
                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Section -->

                                <!-- Informasi Pribadi -->
                                <div
                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                                    <!-- Informasi Dosen Pembimbing TA -->
                                    <div class="sm:col-span-12">
                                        <h2 class="text-lg font-semibold text-gray-800">
                                            Dosen Pembimbing TA
                                        </h2>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="dosen-pembimbing"
                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Nama lengkap
                                        </label>
                                    </div>

                                    <div class="sm:col-span-9">
                                        <select id="dosen-pembimbing"
                                            class="dosen-select py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            @if ($dosen->isEmpty())
                                                <option disabled selected class="text-gray-500">Tidak ada data</option>
                                            @else
                                                <option disabled selected class="text-gray-500">Pilih</option>
                                                @foreach ($dosen as $row)
                                                    <option value="{{ $row->nama_dosen }}">{{ $row->nama_dosen }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <!-- Informasi Dosen Penguji 1 -->
                                <div
                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                                    <div class="sm:col-span-12">
                                        <h2 class="text-lg font-semibold text-gray-800">
                                            Dosen penguji TA
                                        </h2>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="penguji-1"
                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Nama lengkap
                                        </label>
                                    </div>

                                    <div class="sm:col-span-9">
                                        <select id="penguji-1"
                                            class="dosen-select py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            @if ($dosen->isEmpty())
                                                <option disabled selected class="text-gray-500">Tidak ada data</option>
                                            @else
                                                <option disabled selected class="text-gray-500">Pilih</option>
                                                @foreach ($dosen as $row)
                                                    <option value="{{ $row->nama_dosen }}">{{ $row->nama_dosen }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <!-- Informasi Dosen Penguji 2 -->

                            </form>

                        </div>
                    </div>
                    <!-- End First Content -->

                    <!-- Second Content -->
                    <div data-hs-stepper-content-item='{"index": 2}' class="step-content">
                        <div
                            class="p-4 bg-gray-50 flex items-center border border-dashed border-gray-200 rounded-xl overflow-auto w-full">
                            <form class="w-full">
                                <!-- Section -->
                                <div
                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-6 last:pb-0 border-t first:border-transparent border-gray-200 w-full">
                                    <div class="sm:col-span-12">
                                        <h2 class="text-lg font-semibold text-gray-800">
                                            Pengajuan berkas
                                        </h2>
                                    </div>
                                </div>

                                <div class="py-6 border-t border-gray-200">
                                    <!-- Manual book -->
                                    <div class="sm:col-span-3">
                                        <label for="af-submit-application-manual-book"
                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Manual book
                                        </label>
                                    </div>

                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="manual_book"
                                            id="af-submit-application-manual-book" accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                        <span class="text-gray-400" style="font-size: 10px;">
                                            Format penamaan file: Nim_Nama_ManualBook || File.pdf || Maks 5 MB.
                                        </span>
                                    </div>

                                    <!-- Formulir pendaftaran -->
                                    <div class="sm:col-span-3">
                                        <label for="af-submit-application-formulir"
                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Formulir pendaftaran
                                        </label>
                                    </div>

                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="formulir_pendaftaran"
                                            id="af-submit-application-formulir" accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                        <span class="text-gray-400" style="font-size: 10px;">
                                            Format penamaan file: FormPendaftaran || File.pdf || Maks 5 MB.
                                        </span>
                                    </div>

                                    <!-- Sertifikat HKI -->
                                    <div class="sm:col-span-3">
                                        <label for="af-submit-application-sertifikat"
                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Sertifikat HKI
                                        </label>
                                    </div>

                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="sertifikat_hki"
                                            id="af-submit-application-sertifikat" accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                        <span class="text-gray-400" style="font-size: 10px;">
                                            Format penamaan file: Nim_Nama_SertifikatHKI || File.pdf || Maks 5 MB.
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- End Second Content -->

                    <!-- Third Content -->
                    <div data-hs-stepper-content-item='{"index": 3}' class="step-content">
                        <div
                            class="p-4 h-48 bg-gray-50 flex justify-center items-center border border-dashed border-gray-200 rounded-xl">
                            <!-- Section -->
                            <div
                                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-6 last:pb-0 border-t first:border-transparent border-gray-200">
                                <div class="sm:col-span-12">
                                    <h2 class="text-lg font-semibold text-gray-800">
                                        Konfirmasi
                                    </h2>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Col -->
                        </div>
                    </div>
                    <!-- End Third Content -->

                    <!-- Final Content -->
                    <div data-hs-stepper-content-item='{"isFinal": true}' class="step-content">
                        <div
                            class="p-4 bg-gray-50 flex items-center border border-dashed border-gray-200 rounded-xl overflow-auto w-full">
                            <form class="w-full">
                                <!-- Section -->
                                <div
                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-6 last:pb-0 border-t first:border-transparent border-gray-200 w-full">
                                    <div class="sm:col-span-12">
                                        <h2 class="text-lg font-semibold text-gray-800">
                                            Konfirmasi
                                        </h2>
                                    </div>
                                </div>

                                <div class="py-6 border-t border-gray-200"></div>
                                <!-- Section -->
                                <div class="sm:col-span-3 flex-grow">
                                    <div class="w-full">
                                        <div id="user-data-container" class="grid grid-cols-2 gap-0">


                                        </div>
                                    </div>

                                </div>
                            </form>
                            <!-- End Col -->
                        </div>
                    </div>
                    <!-- End Final Content -->
                    <!-- End Final Content -->
                </div>
                <!-- End Stepper Content -->

                <!-- Button Group -->
                <div class="mt-5 flex justify-between items-center gap-x-2">
                    <button type="button" id="back-btn"
                        class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50"
                        style="display: none;">
                        Kembali
                    </button>
                    <button type="button" id="next-btn"
                        class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 ml-auto">
                        Selanjutnya
                    </button>
                    <button type="button" id="finish-btn"
                        class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700"
                        style="display: none;">
                        Kirim
                    </button>
                    <button type="reset" id="reset-btn"
                        class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700"
                        style="display: none;">
                        Reset
                    </button>
                </div>
                <!-- End Button Group -->
            </div>
            <!-- End Stepper -->
        </div>
    </div>
    <!-- Toast -->
    <div id="confirmation-toast"
        class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-gray-800 hidden z-50" role="alert"
        tabindex="-1" aria-labelledby="hs-toast-with-icons-label">
        <div class="max-w-md bg-teal-50 border border-teal-200 rounded-xl shadow-lg">
            <div class="flex p-4">
                <div class="shrink-0">
                    <svg class="size-5 text-gray-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                        <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                    </svg>
                </div>
                <div class="ms-4">
                    <h3 id="hs-toast-with-icons-label" class="text-gray-800 font-semibold">
                        Konfirmasi pengajuan
                    </h3>
                    <div class="mt-1 text-sm text-gray-600">
                        Apakah Anda yakin ingin mengirimkan formulir? Perubahan Anda akan disimpan.
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between gap-x-3">
                            <button id="cancel-btn" type="button"
                                class="text-gray-600 decoration-2 hover:underline font-medium text-sm focus:outline-none focus:underline">
                                Kembali
                            </button>
                            <button id="confirm-btn" type="button"
                                class="text-blue-800 decoration-2 hover:underline font-medium text-sm focus:outline-none focus:underline">
                                Konfirmasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stepper = document.querySelector('#stepper');
            const backBtn = document.querySelector('#back-btn');
            const nextBtn = document.querySelector('#next-btn');
            const finishBtn = document.querySelector('#finish-btn');
            const resetBtn = document.querySelector('#reset-btn');
            const stepNavItems = document.querySelectorAll('[data-hs-stepper-nav-item]');
            const stepContentItems = document.querySelectorAll('[data-hs-stepper-content-item]');
            const selects = document.querySelectorAll('.dosen-select');
            const userDataContainer = document.getElementById('user-data-container');
            const step1DataFromStorage = JSON.parse(localStorage.getItem('step1Data'));

            let currentStep = parseInt(localStorage.getItem('currentStep')) || 1;
            let finalStep = localStorage.getItem('finalStep') === 'true';
            let isCompleted = localStorage.getItem('isCompleted') === 'true';

            const email = document.getElementById('user-email').dataset.email;

            if (finalStep === null) {
                finalStep = false;
                localStorage.setItem('finalStep', finalStep);
            }

            if (isCompleted) {
                stepper.classList.add('completed');
                stepper.setAttribute('data-hs-stepper', JSON.stringify({
                    isCompleted: true
                }));
                currentStep = stepContentItems.length;
            } else {
                stepper.setAttribute('data-hs-stepper', JSON.stringify({
                    currentIndex: currentStep
                }));
            }

            if (step1DataFromStorage) {
                document.getElementById('af-submit-application-penguji-1').value = step1DataFromStorage.kelompok;
                document.getElementById('af-submit-application-full-name').value = step1DataFromStorage.namaLengkap;
                document.getElementById('af-submit-application-nim').value = step1DataFromStorage.nim;
                document.getElementById('dosen-pembimbing').value = step1DataFromStorage.dosenPembimbing;
                document.getElementById('penguji-1').value = step1DataFromStorage.penguji1;
            }

            function fetchUserData() {
                fetch('{{ route('users.hki') }}', {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.userData && data.userData.length > 0) {
                        renderUserData(data.userData);
                        finalStep = true;
                        isCompleted = true;
                        localStorage.setItem('finalStep', finalStep);
                        localStorage.setItem('isCompleted', isCompleted);
                        stepper.classList.add('completed');
                        stepper.setAttribute('data-hs-stepper', JSON.stringify({
                            isCompleted: true
                        }));
                        // Update status from userData
                        const status = data.userData[0].status;
                        localStorage.setItem('status', status); // Update status in localStorage
                        updateStepUI(stepContentItems.length);
                    } else if (step1DataFromStorage != null) {
                        currentStep = parseInt(localStorage.getItem('currentStep'));
                        finalStep = false;
                        isCompleted = false;
                        localStorage.setItem('currentStep', currentStep);
                        localStorage.setItem('finalStep', finalStep);
                        localStorage.setItem('isCompleted', isCompleted);
                        stepper.classList.remove('completed');
                        stepper.setAttribute('data-hs-stepper', JSON.stringify({
                            currentIndex: currentStep
                        }));
                        updateStepUI(currentStep);
                    } else {
                        handleReset();
                    }
                })
                .catch(error => {
                    console.error('Error fetching user data:', error);
                });
            }
            

            function renderUserData(userData) {
                userDataContainer.innerHTML = '';

                userData.forEach(item => {
                    // Tentukan warna latar belakang berdasarkan status
                    const statusBgColor = item.status === 'diajukan' ?
                        'bg-yellow-100' :
                        item.status === 'diterima' ?
                        'bg-green-100' :
                        'bg-red-100';

                    // Tentukan badge status berdasarkan status
                    const statusBadge = item.status === 'diajukan' ?
                        `<span class="py-1 px-3 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-gray-700 rounded-full">Menunggu</span>` :
                        item.status === 'diterima' ?
                        `<span class="py-1 px-3 inline-flex items-center gap-x-1 text-xs font-medium bg-green-100 text-gray-700 rounded-full">Disetujui</span>` :
                        `<span class="py-1 px-3 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-gray-700 rounded-full">Ditolak</span>`;

                    // Buat div status dengan latar belakang yang sesuai
                    const statusDiv = `
                        <div class="flex items-center justify-start py-3 px-4 text-sm font-medium bg-gray-100 border border-gray-200 text-gray-800 -mt-px rounded-none text-left">
                            Status pengiriman
                        </div>
                        <div class="flex items-center justify-start py-3 px-4 text-sm font-medium ${statusBgColor} border border-gray-200 text-gray-800 -mt-px rounded-none text-left">
                            ${statusBadge}
                        </div>
                    `;


                    const berkasDiv = `
                        <div class="flex items-center justify-start py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px rounded-none text-left">
                            Berkas terkirim
                        </div>
                        <div class="flex flex-col items-start py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px rounded-none text-left">
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.manual_book ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.manual_book}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.fomulir_dokumen ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.fomulir_dokumen}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium w-full overflow-x-auto">
                                ${item.sertifikat_hki ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.sertifikat_hki}</span>` : ''}
                            </div>
                        </div>
                    `;

                    const komentarDiv = `
                        <div class="flex items-center justify-start py-3 px-4 text-sm font-medium bg-gray-100 border border-gray-200 text-gray-800 -mt-px rounded-none text-left">
                            Komentar
                        </div>
                        <div class="flex items-center justify-start py-3 px-4 text-sm font-medium bg-gray-100 border border-gray-200 text-gray-800 -mt-px rounded-none text-left">
                            <div class="flex items-center justify-start py-1 px-1 text-xs font-medium bg-white border text-gray-800 -mt-px rounded-none text-left w-full">
                                            ${item.komentar ?? 'Komentar (0)'}
                            </div>  
                        </div>
                    `;

                    userDataContainer.innerHTML += statusDiv + berkasDiv + komentarDiv;
                });
            }

            function handleReset() {
                currentStep = 1;
                finalStep = false;
                isCompleted = false;
                localStorage.removeItem('step1Data');
                localStorage.setItem('currentStep', currentStep);
                localStorage.setItem('finalStep', finalStep);
                localStorage.setItem('isCompleted', isCompleted);
                stepper.classList.remove('completed');
                stepper.setAttribute('data-hs-stepper', JSON.stringify({
                    currentIndex: currentStep
                }));
                updateStepUI(currentStep);
            }

            function updateStepUI(step) {
                console.log('Updating step UI for step:', step);
            
                // Memperbarui tampilan konten langkah
                stepContentItems.forEach((item, index) => {
                    const stepIndex = index + 1;
                    item.style.display = (stepIndex === step) ? '' : 'none';
                });
            
                // Memperbarui status navigasi langkah
                stepNavItems.forEach((item, index) => {
                    const stepIndex = index + 1;
                    if (stepIndex < step) {
                        item.classList.add('success');
                        item.classList.remove('active');
                        item.setAttribute('aria-selected', 'false');
                    } else if (stepIndex === step) {
                        item.classList.add('active');
                        item.classList.remove('success');
                        item.setAttribute('aria-selected', 'true');
                    } else {
                        item.classList.remove('active', 'success');
                        item.setAttribute('aria-selected', 'false');
                    }
                });
            
                // Mengubah warna stepper berdasarkan langkah saat ini
                stepNavItems.forEach((item, index) => {
                    const stepIndex = index + 1;
                    item.classList.remove('completed', 'active', 'pending'); // Menghapus semua kelas
            
                    if (stepIndex < step) {
                        item.classList.add('completed'); // Menambahkan kelas untuk langkah selesai
                    } else if (stepIndex === step) {
                        item.classList.add('active'); // Menambahkan kelas untuk langkah aktif
                    } else {
                        item.classList.add('pending'); // Menambahkan kelas untuk langkah belum selesai
                    }
                });
            
                // Logika untuk tombol Back, Next, dan Finish
                updateButtonUI(step);
            
                // Tambahkan kelas completed jika semua langkah sudah selesai
                if (step === stepContentItems.length) {
                    stepper.classList.add('completed');
                } else {
                    stepper.classList.remove('completed');
                }
            }

            function updateButtonUI() {
                const status = localStorage.getItem('status'); // Ambil status dari localStorage
            
                console.log('Updating step UI for step:', currentStep);
                console.log('Current status:', status);
            
                if (status === 'disetujui' || status === 'diterima') {
                    // Jika status adalah disetujui atau diterima, sembunyikan semua tombol
                    backBtn.style.display = 'none';
                    nextBtn.style.display = 'none';
                    finishBtn.style.display = 'none';
                    resetBtn.style.display = 'none';
                } else {
                    // Atur tombol berdasarkan langkah saat ini
                    if (currentStep === 1) {
                        backBtn.style.display = 'none';
                        nextBtn.style.display = 'inline-block';
                        finishBtn.style.display = 'none';
                        resetBtn.style.display = 'none';
                    } else if (currentStep === 2) {
                        backBtn.style.display = 'inline-block';
                        nextBtn.style.display = 'none';
                        finishBtn.style.display = 'inline-block';
                        resetBtn.style.display = 'none';
                    } else if (currentStep === 3) {
                        backBtn.style.display = 'inline-block';
                        nextBtn.style.display = 'none';
                        finishBtn.style.display = 'none';
                        resetBtn.style.display = 'none';
                    } else {
                        backBtn.style.display = 'inline-block';
                        nextBtn.style.display = 'none';
                        finishBtn.style.display = 'none';
                        resetBtn.style.display = 'none';
                    }
                }
            }
            
            

            // Handler untuk tombol Back
            backBtn.addEventListener('click', () => {
                if (currentStep === 3) {
                    // Jika di langkah final, kembali ke langkah kedua
                    currentStep = 2;
                } else if (currentStep > 1) {
                    // Kembali ke langkah sebelumnya
                    currentStep--;
                }
                updateStepUI(currentStep);
            });

            function showToastConfirm(message, showConfirmation = false) {
                const toast = document.getElementById('confirmation-toast');
                const toastMessage = toast.querySelector('div.text-sm');

                toastMessage.textContent = message;
                toast.classList.remove('hidden');

                if (showConfirmation) {
                    document.getElementById('cancel-btn').addEventListener('click', function() {
                        toast.classList.add('hidden');
                    });

                    document.getElementById('confirm-btn').addEventListener('click', function() {
                        toast.classList.add('hidden');
                        handleFinish();
                    });
                } else {
                    toast.classList.add('hidden');
                }
            }

            function handleFinish() {
                if (currentStep === 2) {
                    const step1DataFromStorage = JSON.parse(localStorage.getItem('step1Data'));
                    console.log('Using Step 1 Data in Step 2:', step1DataFromStorage);

                    const manualBook = document.getElementById('af-submit-application-manual-book').files[0];
                    const formulirPendaftaran = document.getElementById('af-submit-application-formulir').files[0];
                    const sertifikatHKI = document.getElementById('af-submit-application-sertifikat').files[0];

                    const formData = new FormData();
                    formData.append('nim_mhs', step1DataFromStorage.nim);
                    formData.append('nama_mhs', step1DataFromStorage.namaLengkap);
                    formData.append('email', step1DataFromStorage.email);
                    formData.append('kelompok', step1DataFromStorage.kelompok);
                    formData.append('dosen_pa', step1DataFromStorage.dosenPembimbing);
                    formData.append('dosen_p1', step1DataFromStorage.penguji1);
                    formData.append('manual_book', manualBook);
                    formData.append('fomulir_dokumen', formulirPendaftaran);
                    formData.append('sertifikat_hki', sertifikatHKI);

                    fetch('{{ route('submit.form') }}', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            }
                        })
                        .then(response => response.text())
                        .then(data => {
                            console.log('Response:', data);

                            try {
                                const jsonData = JSON.parse(data);
                                if (jsonData.success) {
                                    showToast('Data berhasil disimpan!', 'success');
                                    finalStep = true;
                                    isCompleted = true;
                                    localStorage.setItem('finalStep', finalStep);
                                    localStorage.setItem('isCompleted', isCompleted);
                                    stepper.classList.add('completed');
                                    stepper.setAttribute('data-hs-stepper', JSON.stringify({
                                        isCompleted: true
                                    }));
                                    updateStepUI(stepContentItems.length);
                                    fetchUserData();
                                } else {
                                    showToast('Gagal menyimpan data else.', 'error');
                                }
                            } catch (e) {
                                showToast('Gagal menyimpan data catch.', 'error');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            showToast('Gagal menyimpan data catch error.', 'error');
                        });
                }
            }

            backBtn.addEventListener('click', function() {
                if (currentStep > 1) {
                    currentStep--;
                    localStorage.setItem('currentStep', currentStep);
                    stepper.setAttribute('data-hs-stepper', JSON.stringify({
                        currentIndex: currentStep
                    }));
                    updateStepUI(currentStep);
                }
            });


            nextBtn.addEventListener('click', function() {
                if (currentStep === 1) {
                    const kelompok = document.getElementById('af-submit-application-penguji-1');
                    const namaLengkap = document.getElementById('af-submit-application-full-name');
                    const nim = document.getElementById('af-submit-application-nim');
                    const dosenPembimbing = document.getElementById('dosen-pembimbing');
                    const penguji1 = document.getElementById('penguji-1');

                    step1Data = {};

                    if (kelompok && namaLengkap && nim && dosenPembimbing && penguji1) {
                        step1Data = {
                            kelompok: kelompok.value,
                            namaLengkap: namaLengkap.value,
                            nim: nim.value,
                            dosenPembimbing: dosenPembimbing.value,
                            penguji1: penguji1.value,
                            email: email
                        };

                        localStorage.setItem('step1Data', JSON.stringify(step1Data));

                        console.log('Step 1 Data Saved on Next:', step1Data);
                    } else {
                        console.error('One or more elements not found');
                    }
                }
                if (currentStep < stepContentItems.length) {
                    currentStep++;
                    localStorage.setItem('currentStep', currentStep);
                    stepper.setAttribute('data-hs-stepper', JSON.stringify({
                        currentIndex: currentStep
                    }));
                    updateStepUI(currentStep);
                }
            });

            finishBtn.addEventListener('click', function() {
                showToastConfirm(
                    'Apakah Anda yakin ingin mengirimkan formulir? Perubahan Anda akan disimpan.',
                    true);
            });

            resetBtn.addEventListener('click', function() {
                currentStep = 1;
                finalStep = false;
                isCompleted = false;
                localStorage.removeItem('step1Data');
                localStorage.setItem('currentStep', currentStep);
                localStorage.setItem('finalStep', finalStep);
                localStorage.setItem('isCompleted', isCompleted);
                stepper.classList.remove('completed');
                stepper.setAttribute('data-hs-stepper', JSON.stringify({
                    currentIndex: currentStep
                }));
                updateStepUI(currentStep);
            });

            function updateSelectOptions() {
                const selectedValues = Array.from(selects).map(select => select.value);
                selects.forEach(select => {
                    Array.from(select.options).forEach(option => {
                        if (option.value && selectedValues.includes(option.value) && option
                            .value !== select.value) {
                            option.disabled = true;
                        } else {
                            option.disabled = false;
                        }
                    });
                });
            }

            selects.forEach(select => {
                select.addEventListener('change', updateSelectOptions);
            });

            fetchUserData();

            updateStepUI(currentStep);
        });
    </script>

</x-user-layout>
