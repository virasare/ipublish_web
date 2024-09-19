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
            <div id="stepper-pub" data-hs-stepper='{"currentIndex": 1}'>
                <!-- Stepper Nav -->
                <ul class="relative flex flex-row gap-x-2">
                    <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 1} '>
                        <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                            <span class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">1</span>
                                <svg class="hidden shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                            <span class="ms-2 text-sm font-medium text-gray-800">
                                Data diri
                            </span>
                        </span>
                        <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
                    </li>
                    <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 2}'>
                        <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                            <span class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
                                <svg class="hidden shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
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
                        <div class="p-4 bg-gray-50 flex justify-center items-center border border-dashed border-gray-200 rounded-xl overflow-auto">
                            <form>
                                <!-- Section -->
                                <div
                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                                    <div class="sm:col-span-12">
                                        <h2 class="text-lg font-semibold text-gray-800">
                                            Tentang Publikasi
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
                                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                                    <!-- Informasi Dosen Pembimbing TA -->
                                    <div class="sm:col-span-12">
                                        <h2 class="text-lg font-semibold text-gray-800">
                                            Dosen Pembimbing TA
                                        </h2>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="dosen-pembimbing" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Nama lengkap
                                        </label>
                                    </div>

                                    <div class="sm:col-span-9">
                                        <select id="dosen-pembimbing" class="dosen-select py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            @if($dosen->isEmpty())
                                                <option disabled selected class="text-gray-500">Tidak ada data</option>
                                            @else
                                                <option disabled selected class="text-gray-500">Pilih</option>
                                                @foreach ($dosen as $row)
                                                    <option value="{{ $row->nama_dosen }}">{{ $row->nama_dosen }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <!-- Informasi Dosen Penguji 1 -->
                                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                                    <div class="sm:col-span-12">
                                        <h2 class="text-lg font-semibold text-gray-800">
                                            Dosen penguji TA
                                        </h2>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="penguji-1" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Penguji 1
                                        </label>
                                    </div>

                                    <div class="sm:col-span-9">
                                        <select id="penguji-1" class="dosen-select py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            @if($dosen->isEmpty())
                                                <option disabled selected class="text-gray-500">Tidak ada data</option>
                                            @else
                                                <option disabled selected class="text-gray-500">Pilih</option>
                                                @foreach ($dosen as $row)
                                                    <option value="{{ $row->nama_dosen }}">{{ $row->nama_dosen }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <!-- Informasi Dosen Penguji 2 -->
                                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                                    <div class="sm:col-span-3">
                                        <label for="penguji-2" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Penguji 2
                                        </label>
                                    </div>

                                    <div class="sm:col-span-9">
                                        <select id="penguji-2" class="dosen-select py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            @if($dosen->isEmpty())
                                                <option disabled selected class="text-gray-500">Tidak ada data</option>
                                            @else
                                                <option disabled selected class="text-gray-500">Pilih</option>
                                                @foreach ($dosen as $row)
                                                    <option value="{{ $row->nama_dosen }}">{{ $row->nama_dosen }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- End First Content -->

                    <!-- Second Content -->
                    <div data-hs-stepper-content-item='{"index": 2}' class="step-content">
                        <div class="p-4 bg-gray-50 flex items-center border border-dashed border-gray-200 rounded-xl overflow-auto">
                            <form class="w-full">
                                <!-- Section -->
                                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-6 last:pb-0 border-t first:border-transparent border-gray-200">
                                    <div class="sm:col-span-12">
                                        <h2 class="text-lg font-semibold text-gray-800">
                                            Pengajuan berkas
                                        </h2>
                                    </div>
                                </div>

                                <div class="py-6 border-t border-gray-200">
                                    <!-- Tanggal Pengajuan -->
                                    <div class="sm:col-span-3">
                                        <label for="tanggal-pengajuan" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Tanggal Pengajuan
                                        </label>
                                    </div>
                                    <div class="sm:col-span-9">
                                        <input id="tanggal-pengajuan" name="tanggal_pengajuan" type="date"
                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                            </span>
                                    </div>

                                    <!-- Judul Makalah SNATIA di JNATIA -->
                                    <div class="sm:col-span-3">
                                        <label for="judul-makalah-snatia" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Judul Makalah SNATIA di JNATIA
                                        </label>
                                    </div>
                                    <div class="sm:col-span-9">
                                        <input id="judul-makalah-snatia" name="judul_makalah_snatia" type="text"
                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    </div>

                                    <!-- Sertifikat Pemakalah SNATIA -->
                                    <div class="sm:col-span-3">
                                        <label for="sertifikat-snatia" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Sertifikat Pemakalah SNATIA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="sertifikat_snatia" id="sertifikat-snatia" accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Format penamaan file: Nim_Nama_SertifikatSNATIA || File.pdf || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- File Hasil Turnitin Publikasi Makalah SNATIA di JNATIA -->
                                    <div class="sm:col-span-3">
                                        <label for="turnitin-snatia" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            File Hasil Turnitin Publikasi Makalah SNATIA di JNATIA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="turnitin_snatia" id="turnitin-snatia" accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Nilai turnitin harus dibawah 20%, Upload hasil turnitin || Format penamaan file: Nim_Nama_TurnitinPublikasiSNATIA || File.pdf || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- LOA/Publikasi Makalah SNATIA di JNATIA -->
                                    <div class="sm:col-span-3">
                                        <label for="loa-snatia" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            LOA/Publikasi Makalah SNATIA di JNATIA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="loa_snatia" id="loa-snatia" accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Upload dalam satu file (Jika sudah terbit-->Cover, Dewan Redaksi, Daftar Isi dan Paper) atau (Jika belum terbit-->LOA dan paper). || Format penamaan file: Nim_Nama_PublikasiSNATIA || File.pdf || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- Judul Makalah PKL di JUPITA -->
                                    <div class="sm:col-span-3">
                                        <label for="judul-makalah-pkl" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Judul Makalah PKL di JUPITA
                                        </label>
                                    </div>
                                    <div class="sm:col-span-9">
                                        <input id="judul-makalah-pkl" name="judul_makalah_pkl" type="text"
                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    </div>

                                    <!-- File Hasil Turnitin Publikasi Makalah PKL di JUPITA -->
                                    <div class="sm:col-span-3">
                                        <label for="turnitin-pkl" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            File Hasil Turnitin Publikasi Makalah PKL di JUPITA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="turnitin_pkl" id="turnitin-pkl" accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Nilai turnitin harus dibawah 20%, Upload hasil turnitin. || Format penamaan file: Nim_Nama_TurnitinPublikasiJUPITA || File.pdf || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- LOA/Publikasi Makalah PKL di JUPITA -->
                                    <div class="sm:col-span-3">
                                        <label for="loa-pkl" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            LOA/Publikasi Makalah PKL di JUPITA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="loa_pkl" id="loa-pkl" accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Upload dalam satu file (Jika sudah terbit-->Cover, Dewan Redaksi, Daftar Isi dan Paper) atau (Jika belum terbit-->LOA dan paper). || Format penamaan file: Nim_Nama_PublikasiJUPITA || File.pdf || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- Judul HKI PKL -->
                                    <div class="sm:col-span-3">
                                        <label for="judul-hki-pkl" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Judul HKI PKL
                                        </label>
                                    </div>
                                    <div class="sm:col-span-9">
                                        <input id="judul-hki-pkl" name="judul_hki_pkl" type="text"
                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    </div>

                                    <!-- Tanggal Terbit HKI PKL -->
                                    <div class="sm:col-span-3">
                                        <label for="tanggal-terbit-hki-pkl" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Tanggal Terbit HKI PKL 
                                        </label>
                                    </div>
                                    <div class="sm:col-span-9">
                                        <input id="tanggal-terbit-hki-pkl" name="tanggal_terbit_hki_pkl" type="date"
                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    </div>

                                    <!-- Manual Book HKI PKL -->
                                    <div class="sm:col-span-3">
                                        <label for="manual-book-hki-pkl" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Manual Book HKI PKL
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="manual_book_hki_pkl" id="manual-book-hki-pkl" accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Format penamaan file: Nim_Nama_ManualBookHKI || File.pdf || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- Form Pendaftaran HKI PKL -->
                                    <div class="sm:col-span-3">
                                        <label for="form_pendaftaran_hki_pkl" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Form Pendaftaran HKI PKL
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="form_pendaftaran_hki_pkl" id="form_pendaftaran_hki_pkl"
                                            accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Upload form pendaftaran HKI PKL yang sudah di ttd oleh semua penulis yang ada materai 10rb  || Format penamaan file: Nim_Nama_FormPendaftaranHKIPKL || File.pdf || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- Sertifikat HKI PKL -->
                                    <div class="sm:col-span-3">
                                        <label for="sertifikat-hki-pkl" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Sertifikat HKI PKL
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="sertifikat_hki_pkl" id="sertifikat-hki-pkl" accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Format penamaan file: Nim_Nama_SertifikatHKI || File.pdf || Maks 10 MB.
                                            </span>
                                    </div>

                                    <!-- Judul Tugas Akhir (TA) -->
                                    <div class="sm:col-span-3">
                                        <label for="judul_tugas_akhir" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Judul Tugas Akhir (TA)
                                        </label>
                                    </div>
                                    <div class="sm:col-span-9">
                                        <input id="judul_tugas_akhir" type="text" name="judul_tugas_akhir"
                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    </div>

                                    <!-- Laporan Tugas Akhir -->
                                    <div class="sm:col-span-3">
                                        <label for="laporan_tugas_akhir" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Laporan Tugas Akhir
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="laporan_tugas_akhir" id="laporan_tugas_akhir"
                                            accept=".docx"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Format penamaan file: Nim_Nama_LaporanTA || File.docx || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- Berita Acara Ujian TA -->
                                    <div class="sm:col-span-3">
                                        <label for="berita_acara_ujian_ta" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Berita Acara Ujian TA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="berita_acara_ujian_ta" id="berita_acara_ujian_ta"
                                            accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Upload berita acara ujian Tugas Akhir yang sudah di ttd oleh mahasiswa, pembimbing dan semua penguji || Format penamaan file: Nim_Nama_BeritaAcaraTA || File.pdf || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- Lembar Pengesahan TA -->
                                    <div class="sm:col-span-3">
                                        <label for="lembar_pengesahan_ta" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Lembar Pengesahan TA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="lembar_pengesahan_ta" id="lembar_pengesahan_ta"
                                            accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Upload lembar pengesahan buku TA yang sudah di ttd oleh pembimbing dan semua penguji || Format penamaan file: Nim_Nama_LembarPengesahanTA || File.pdf || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- File Program Tugas Akhir -->
                                    <div class="sm:col-span-3">
                                        <label for="file_program_ta" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            File Program Tugas Akhir
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="file_program_ta" id="file_program_ta"
                                            accept=".zip"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Isikan instruksi installasi dan bisa ditulis dalam notepad || Format penamaan file: Nim_Nama_Project || File.zip || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- Judul Jurnal TA -->
                                    <div class="sm:col-span-3">
                                        <label for="judul_jurnal_ta" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Judul Jurnal TA
                                        </label>
                                    </div>
                                    <div class="sm:col-span-9">
                                        <input id="judul_jurnal_ta" name="judul_jurnal_ta" type="text"
                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    </div>

                                    <!-- Upload Draft Jurnal TA -->
                                    <div class="sm:col-span-3">
                                        <label for="upload_draft_jurnal_ta" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Upload Draft Jurnal TA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="upload_draft_jurnal_ta" id="upload_draft_jurnal_ta"
                                            accept=".docx"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Penulisan draft jurnal menggunakan Template Jurnal JELIKU || Format penamaan file: Nim_Nama_DraftJurnalTA || File.docx || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- File Turnitin Draft Jurnal TA -->
                                    <div class="sm:col-span-3">
                                        <label for="file_turnitin_draft_jurnal_ta" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            File Turnitin Draft Jurnal TA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="file_turnitin_draft_jurnal_ta" id="file_turnitin_draft_jurnal_ta"
                                            accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Upload hasil turnitin draft jurnal TA dengan nilai turnitin dibawah 20% || Format penamaan file: Nim_Nama_TurnitinJurnalTA || File.pdf || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- LOA Publikasi Makalah TA di JELIKU/Surat Penyataan Submit dari Pembimbing TA -->
                                    <div class="sm:col-span-3">
                                        <label for="loa_publikasi_makalah_ta" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            LOA Publikasi Makalah TA di JELIKU/Surat Penyataan Submit dari Pembimbing TA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="loa_publikasi_makalah_ta" id="loa_publikasi_makalah_ta"
                                            accept=".pdf"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Upload bukti diterima (LOA) artikel Tugas Akhir yang diterbitkan di JELIKU (penulis: mhs, pembimbing, dosen penguji). Atau jika diterbitkan diluar Jurnal Program Studi, maka mahasiswa mengupload surat pernyataan dari dosen pembimbing bahwa artikel akan disubmit oleh pembimbing (penulis: urutan penulis ditentukan oleh dosen pembimbing). || Format penamaan file:  Nim_Nama_BuktiPublikasiTA || File.pdf || Maks 5 MB.
                                            </span>
                                    </div>

                                    <!-- Judul Manual Book TA -->
                                    <div class="sm:col-span-3">
                                        <label for="judul_manual_book_ta" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Judul Manual Book TA
                                        </label>
                                    </div>
                                    <div class="sm:col-span-9">
                                        <input id="judul_manual_book_ta" name="judul_manual_book_ta" type="text"
                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    </div>

                                    <!-- Upload File Manual Book TA -->
                                    <div class="sm:col-span-3">
                                        <label for="upload_file_manual_book_ta" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            Upload File Manual Book TA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="upload_file_manual_book_ta" id="upload_file_manual_book_ta"
                                            accept=".docx"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Upload manual book untuk pendaftaran HKI dari program TA || Format penamaan file:  Nim_Nama_ManualBookTA || File.docx || Maks 5 MB.
                                            </span>
                                    </div>

                                     <!-- ⁠Form Pendaftaran HKI TA -->
                                     <div class="sm:col-span-3">
                                        <label for="upload_file_pendaftaran_hki_ta" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                            ⁠Form Pendaftaran HKI TA
                                        </label>
                                    </div>
                                    <div class="relative sm:col-span-9">
                                        <input type="file" name="upload_file_pendaftaran_hki_ta" id="upload_file_pendaftaran_hki_ta"
                                            accept=".docx"
                                            class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <span class="text-gray-400" style="font-size: 10px;">
                                                Upload form pendafraran HKI yang sudah disi data diri masing-masing penulis (tanpa ttd dan materai) || Format penamaan file: Nim_Nama_FormPendaftaranHKITA || File.docx || Maks 5 MB.
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
                </div>
                <!-- End Stepper Content -->

                <!-- Button Group -->
               <div class="mt-5 flex justify-between items-center gap-x-2">
                    <button type="button" id="back-btn-pub" class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50" style="display: none;">
                        Kembali
                    </button>
                    <button type="button" id="next-btn-pub" class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700" style="margin-left: auto;">
                        Selanjutnya
                    </button>
                    <button type="button" id="finish-btn-pub" class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700" style="display: none;">
                        Kirim
                    </button>
                    <button type="reset" id="reset-btn-pub" class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700" style="display: none;">
                        Reset
                    </button>
                </div>
                <!-- End Button Group -->
            </div>
            <!-- End Stepper -->
        </div>
    </div>
    <div id="confirmation-toast" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-gray-800 hidden z-50" role="alert" tabindex="-1" aria-labelledby="hs-toast-with-icons-label">
        <div class="max-w-md bg-teal-50 border border-teal-200 rounded-xl shadow-lg">
            <div class="flex p-4">
                <div class="shrink-0">
                    <svg class="size-5 text-gray-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const stepper = document.querySelector('#stepper-pub');
            const backBtn = document.querySelector('#back-btn-pub');
            const nextBtn = document.querySelector('#next-btn-pub');
            const finishBtn = document.querySelector('#finish-btn-pub');
            const resetBtn = document.querySelector('#reset-btn-pub');
            const stepNavItems = document.querySelectorAll('[data-hs-stepper-nav-item]');
            const stepContentItems = document.querySelectorAll('[data-hs-stepper-content-item]');
            const selects = document.querySelectorAll('.dosen-select');
            const userDataContainer = document.getElementById('user-data-container');
            const stepDataPubFromStorage = JSON.parse(localStorage.getItem('stepDataPub'));

            let currentStepPub = parseInt(localStorage.getItem('currentStepPub')) || 1;
            let finalStepPub = localStorage.getItem('finalStepPub') === 'true';
            let isCompletedPub = localStorage.getItem('isCompletedPub') === 'true';

            const email = document.getElementById('user-email').dataset.email;

            if (stepDataPubFromStorage) {
                document.getElementById('af-submit-application-penguji-1').value = stepDataPubFromStorage.kelompok;
                document.getElementById('af-submit-application-full-name').value = stepDataPubFromStorage.namaLengkap;
                document.getElementById('af-submit-application-nim').value = stepDataPubFromStorage.nim;
                document.getElementById('dosen-pembimbing').value = stepDataPubFromStorage.dosenPembimbing;
                document.getElementById('penguji-1').value = stepDataPubFromStorage.penguji1;
                document.getElementById('penguji-2').value = stepDataPubFromStorage.penguji2;
            }

            if (finalStepPub === null) {
                finalStepPub = false;
                localStorage.setItem('finalStepPub', finalStepPub);
            }

            if (isCompletedPub) {
                stepper.classList.add('completed');
                stepper.setAttribute('data-hs-stepper', JSON.stringify({ isCompleted: true }));
                currentStepPub = stepContentItems.length; 
            } else {
                stepper.setAttribute('data-hs-stepper', JSON.stringify({ currentIndex: currentStepPub }));
            }

            function fetchUserData() {
                fetch('{{ route('users.publikasi') }}', {
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
                    if (data.userDataPub && data.userDataPub.length > 0) {
                        renderUserData(data.userDataPub);
                        finalStepPub = true;
                        isCompletedPub = true;
                        localStorage.setItem('finalStepPub', finalStepPub);
                        localStorage.setItem('isCompletedPub', isCompletedPub);
                        stepper.classList.add('completed');
                        stepper.setAttribute('data-hs-stepper', JSON.stringify({ isCompleted: true }));
                        // Update status from userDataPub
                        const status = data.userDataPub[0].status;
                        localStorage.setItem('statusPub', status); // Update status in localStorage
                        updateStepUI(stepContentItems.length);
                    } else if (stepDataPubFromStorage != null) {
                        currentStepPub = parseInt(localStorage.getItem('currentStepPub'));
                        finalStepPub = false;
                        isCompletedPub = false;
                        localStorage.setItem('currentStepPub', currentStepPub);
                        localStorage.setItem('finalStepPub', finalStepPub);
                        localStorage.setItem('isCompletedPub', isCompletedPub);
                        stepper.classList.remove('completed');
                        stepper.setAttribute('data-hs-stepper', JSON.stringify({ currentIndex: currentStepPub }));
                        updateStepUI(currentStepPub);
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


                    {{--  formData.append('tanggal_pengajuan', tanggalPengajuan);
   

                    formData.append('upload_file_manual_book_ta', uploadFileManualBookTA);
                    formData.append('upload_file_pendaftaran_hki_ta', uploadFilePendaftaranHKITA);  --}}
                    
                    const berkasDiv = `
                        <div class="flex items-center justify-start py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px rounded-none text-left">
                            Berkas terkirim
                        </div>
                        <div class="flex flex-col items-start py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px rounded-none text-left">
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.tanggal_pengajuan}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.judul_makalah_snatia}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.sertifikat_snatia ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.sertifikat_snatia}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.turnitin_snatia ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.turnitin_snatia}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.loa_snatia ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.loa_snatia}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.judul_hki_pkl}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.tanggal_terbit_hki_pkl}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.manual_book_hki_pkl ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.manual_book_hki_pkl}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.sertifikat_hki_pkl ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.sertifikat_hki_pkl}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.form_pendaftaran_hki_pkl ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.form_pendaftaran_hki_pkl}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.judul_tugas_akhir}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.laporan_tugas_akhir ? `<i class="fas fa-file-word text-blue-600 mr-2"></i><span>${item.laporan_tugas_akhir}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.berita_acara_ujian_ta ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.berita_acara_ujian_ta}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.lembar_pengesahan_ta ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.lembar_pengesahan_ta}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.file_program_ta ? `<i class="fas fa-file-archive text-gray-400 mr-2"></i><span>${item.file_program_ta}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.judul_jurnal_ta}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.upload_draft_jurnal_ta ? `<i class="fas fa-file-word text-blue-600 mr-2"></i><span>${item.upload_draft_jurnal_ta}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.file_turnitin_draft_jurnal_ta ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.file_turnitin_draft_jurnal_ta}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.loa_publikasi_makalah_ta ? `<i class="fas fa-file-pdf text-red-600 mr-2"></i><span>${item.loa_publikasi_makalah_ta}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.judul_manual_book_ta}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.upload_file_manual_book_ta ? `<i class="fas fa-file-word text-blue-600 mr-2"></i><span>${item.upload_file_manual_book_ta}</span>` : ''}
                            </div>
                            <div class="flex items-center justify-start py-2 px-4 text-xs text-gray-500 font-medium border-b border-gray-200 w-full overflow-x-auto">
                                ${item.upload_file_pendaftaran_hki_ta ? `<i class="fas fa-file-word text-blue-600 mr-2"></i><span>${item.upload_file_pendaftaran_hki_ta}</span>` : ''}
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
                currentStepPub = 1;
                finalStepPub = false;
                isCompletedPub = false;
                localStorage.removeItem('stepDataPub');
                localStorage.setItem('currentStepPub', currentStepPub);
                localStorage.setItem('finalStepPub', finalStepPub);
                localStorage.setItem('isCompletedPub', isCompletedPub);
                stepper.classList.remove('completed');
                stepper.setAttribute('data-hs-stepper', JSON.stringify({ currentIndex: currentStepPub }));
                updateStepUI(currentStepPub);
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
            
                // Logika untuk tombol Back, Next, dan Finish
                updateButtonUI(step);
            
                // Tambahkan kelas completed jika semua langkah sudah selesai
                if (step === stepContentItems.length) {
                    stepper.classList.add('completed');
                } else {
                    stepper.classList.remove('completed');
                }
            }
            
        
            function updateButtonUI(step) {
                const status = localStorage.getItem('statusPub'); // Ambil status dari localStorage
                
                console.log('Updating button UI for step:', step);
                console.log('Current status:', status);
            
                if (status === 'disetujui' || status === 'diterima') {
                    // Jika status adalah disetujui atau diterima, sembunyikan semua tombol
                    backBtn.style.display = 'none';
                    nextBtn.style.display = 'none';
                    finishBtn.style.display = 'none';
                    resetBtn.style.display = 'none';
                } else {
                    // Atur tombol berdasarkan langkah saat ini
                    if (step === 1) {
                        backBtn.style.display = 'none';
                        nextBtn.style.display = 'inline-block';
                        finishBtn.style.display = 'none';
                        resetBtn.style.display = 'none';
                    } else if (step === 2) {
                        backBtn.style.display = 'inline-block';
                        nextBtn.style.display = 'none';
                        finishBtn.style.display = 'inline-block';
                        resetBtn.style.display = 'none';
                    } else if (step === stepContentItems.length) {
                        backBtn.style.display = 'inline-block';
                        nextBtn.style.display = 'none';
                        finishBtn.style.display = 'none';
                        resetBtn.style.display = 'none';
                    } else {
                        backBtn.style.display = 'inline-block';
                        nextBtn.style.display = 'inline-block';
                        finishBtn.style.display = 'none';
                        resetBtn.style.display = 'none';
                    }
                }
            }
            
            
        
            // Handler untuk tombol Back
            backBtn.addEventListener('click', function() {
                if (currentStepPub > 1) {
                    currentStepPub--;
                    localStorage.setItem('currentStepPub', currentStepPub);
                    stepper.setAttribute('data-hs-stepper', JSON.stringify({ currentIndex: currentStepPub }));
                    updateStepUI(currentStepPub);
                }
            });

            function showToastConfirm(message, showConfirmation = false) {
                const toast = document.getElementById('confirmation-toast');
                const toastMessage = toast.querySelector('div.text-sm');

                toastMessage.textContent = message;
                toast.classList.remove('hidden');

                if (showConfirmation) {
                    document.getElementById('cancel-btn').addEventListener('click', function () {
                        toast.classList.add('hidden'); 
                    });

                    document.getElementById('confirm-btn').addEventListener('click', function () {
                        toast.classList.add('hidden'); 
                        handleFinish(); 
                    });
                } else {
                    toast.classList.add('hidden');
                }
            }

            function handleFinish() {
                if (currentStepPub === 2) {
                    const stepDataPubFromStorage = JSON.parse(localStorage.getItem('stepDataPub'));
                    console.log('Using Step 1 Data in Step 2:', stepDataPubFromStorage);

                    const tanggalPengajuan = document.getElementById('tanggal-pengajuan').value;
                    const judulMakalahSnatia = document.getElementById('judul-makalah-snatia').value;
                    const sertifikatSnatia = document.getElementById('sertifikat-snatia').files[0];
                    const turnitinSnatia = document.getElementById('turnitin-snatia').files[0];
                    const loaSnatia = document.getElementById('loa-snatia').files[0];
                    const judulMakalahPkl = document.getElementById('judul-makalah-pkl').value;
                    const turnitinPkl = document.getElementById('turnitin-pkl').files[0];
                    const loaPkl = document.getElementById('loa-pkl').files[0];
                    const judulHkiPkl = document.getElementById('judul-hki-pkl').value;
                    const tanggalTerbitHkiPkl = document.getElementById('tanggal-terbit-hki-pkl').value;
                    const manualBookHkiPkl = document.getElementById('manual-book-hki-pkl').files[0];
                    const sertifikatHkiPkl = document.getElementById('sertifikat-hki-pkl').files[0];
                    const formPendaftaranHKIPKL = document.getElementById('form_pendaftaran_hki_pkl').files[0];
                    const judulTugasAkhir = document.getElementById('judul_tugas_akhir').value;
                    const laporanTugasAkhir = document.getElementById('laporan_tugas_akhir').files[0];
                    const beritaAcaraUjianTA = document.getElementById('berita_acara_ujian_ta').files[0];
                    const lembarPengesahanTA = document.getElementById('lembar_pengesahan_ta').files[0];
                    const fileProgramTA = document.getElementById('file_program_ta').files[0];
                    const judulJurnalTA = document.getElementById('judul_jurnal_ta').value;
                    const uploadDraftJurnalTA = document.getElementById('upload_draft_jurnal_ta').files[0];
                    const fileTurnitinDraftJurnalTA = document.getElementById('file_turnitin_draft_jurnal_ta').files[0];
                    const loaPublikasiMakalahTA = document.getElementById('loa_publikasi_makalah_ta').files[0];
                    const judulManualBookTA = document.getElementById('judul_manual_book_ta').value;
                    const uploadFileManualBookTA = document.getElementById('upload_file_manual_book_ta').files[0];
                    const uploadFilePendaftaranHKITA = document.getElementById('upload_file_pendaftaran_hki_ta').files[0];

                    const formData = new FormData();
                    formData.append('nim_mhs', stepDataPubFromStorage.nim);
                    formData.append('nama_mhs', stepDataPubFromStorage.namaLengkap);
                    formData.append('email', stepDataPubFromStorage.email);
                    formData.append('kelompok', stepDataPubFromStorage.kelompok);
                    formData.append('dosen_pa', stepDataPubFromStorage.dosenPembimbing);
                    formData.append('dosen_p1', stepDataPubFromStorage.penguji1);
                    formData.append('dosen_p2', stepDataPubFromStorage.penguji2);
                    formData.append('tanggal_pengajuan', tanggalPengajuan);
                    formData.append('judul_makalah_snatia', judulMakalahSnatia);
                    formData.append('sertifikat_snatia', sertifikatSnatia);
                    formData.append('turnitin_snatia', turnitinSnatia);
                    formData.append('loa_snatia', loaSnatia);
                    formData.append('judul_makalah_pkl', judulMakalahPkl);
                    formData.append('turnitin_pkl', turnitinPkl);
                    formData.append('loa_pkl', loaPkl);
                    formData.append('judul_hki_pkl', judulHkiPkl);
                    formData.append('tanggal_terbit_hki_pkl', tanggalTerbitHkiPkl);
                    formData.append('manual_book_hki_pkl', manualBookHkiPkl);
                    formData.append('sertifikat_hki_pkl', sertifikatHkiPkl);
                    formData.append('form_pendaftaran_hki_pkl', formPendaftaranHKIPKL);
                    formData.append('judul_tugas_akhir', judulTugasAkhir);
                    formData.append('laporan_tugas_akhir', laporanTugasAkhir);
                    formData.append('berita_acara_ujian_ta', beritaAcaraUjianTA);
                    formData.append('lembar_pengesahan_ta', lembarPengesahanTA);
                    formData.append('file_program_ta', fileProgramTA);
                    formData.append('judul_jurnal_ta', judulJurnalTA);
                    formData.append('upload_draft_jurnal_ta', uploadDraftJurnalTA);
                    formData.append('file_turnitin_draft_jurnal_ta', fileTurnitinDraftJurnalTA);
                    formData.append('loa_publikasi_makalah_ta', loaPublikasiMakalahTA);
                    formData.append('judul_manual_book_ta', judulManualBookTA);
                    formData.append('upload_file_manual_book_ta', uploadFileManualBookTA);
                    formData.append('upload_file_pendaftaran_hki_ta', uploadFilePendaftaranHKITA);

                    fetch('{{ route('submit.form.pub') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.text()) 
                    .then(data => {
                        console.log('Response:', data); 

                        try {
                            const jsonData = JSON.parse(data);
                            if (jsonData.success) {
                                showToast('Data berhasil disimpan!', 'success');
                                finalStepPub = true;
                                isCompletedPub = true;
                                localStorage.setItem('finalStepPub', finalStepPub);
                                localStorage.setItem('isCompletedPub', isCompletedPub);
                                stepper.classList.add('completed');
                                stepper.setAttribute('data-hs-stepper', JSON.stringify({ isCompleted: true }));
                                updateStepUI(stepContentItems.length);
                                fetchUserData();
                            } else {
                                showToast('Gagal menyimpan data.', 'error');
                            }
                        } catch (e) {
                            showToast('Terjadi kesalahan. Silakan coba lagi.', 'error');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showToast('Terjadi kesalahan. Silakan coba lagi.', 'error');
                    });
                }
            }


            nextBtn.addEventListener('click', function () {
                if (currentStepPub === 1) {
                    const kelompok = document.getElementById('af-submit-application-penguji-1');
                    const namaLengkap = document.getElementById('af-submit-application-full-name');
                    const nim = document.getElementById('af-submit-application-nim');
                    const dosenPembimbing = document.getElementById('dosen-pembimbing');
                    const penguji1 = document.getElementById('penguji-1');
                    const penguji2 = document.getElementById('penguji-2');

                    stepDataPub = {};

                    if (kelompok && namaLengkap && nim && dosenPembimbing && penguji1 && penguji2) {
                        stepDataPub = {
                            kelompok: kelompok.value,
                            namaLengkap: namaLengkap.value,
                            nim: nim.value,
                            dosenPembimbing: dosenPembimbing.value,
                            penguji1: penguji1.value,
                            penguji2: penguji2.value,
                            email: email 
                        };

                        localStorage.setItem('stepDataPub', JSON.stringify(stepDataPub));

                        console.log('Step 1 Data Saved on Next:', stepDataPub);
                    } else {
                        console.error('One or more elements not found');
                    }
                }
                if (currentStepPub < stepContentItems.length) {
                    currentStepPub++;
                    localStorage.setItem('currentStepPub', currentStepPub);
                    stepper.setAttribute('data-hs-stepper', JSON.stringify({ currentIndex: currentStepPub }));
                    updateStepUI(currentStepPub);
                }
            });

            backBtn.addEventListener('click', function () {
                if (currentStepPub > 1) {
                    currentStepPub--;
                    localStorage.setItem('currentStepPub', currentStepPub);
                    stepper.setAttribute('data-hs-stepper', JSON.stringify({ currentIndex: currentStepPub }));
                    updateStepUI(currentStepPub);
                }
            });

            finishBtn.addEventListener('click', function () {
                showToastConfirm('Apakah Anda yakin ingin mengirimkan formulir? Perubahan Anda akan disimpan.', true);
            });

            resetBtn.addEventListener('click', function () {
                currentStepPub = 1;
                finalStepPub = false;
                isCompletedPub = false;
                localStorage.removeItem('stepDataPub');
                localStorage.setItem('currentStepPub', currentStepPub);
                localStorage.setItem('finalStepPub', finalStepPub);
                localStorage.setItem('isCompletedPub', isCompletedPub);
                stepper.classList.remove('completed');
                stepper.setAttribute('data-hs-stepper', JSON.stringify({ currentIndex: currentStepPub }));
                updateStepUI(currentStepPub);
            });

            function updateSelectOptions() {
                const selectedValues = Array.from(selects).map(select => select.value);
                selects.forEach(select => {
                    Array.from(select.options).forEach(option => {
                        if (option.value && selectedValues.includes(option.value) && option.value !== select.value) {
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

            updateStepUI(currentStepPub);
        });
    </script>
</x-user-layout>
