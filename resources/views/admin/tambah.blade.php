<x-app-layout>
    <x-slot name="header">
        {{ __('Pengajuan') }}
    </x-slot>

    //bayground
    <style>
        body {
            background-color: #F9FAFB;
        }
    </style>

    //ukuran content
    <div class="w-full pt-4 px-2 sm:px-4 md:px-10 lg:ps-80 mx-auto">

        <div class="p-2 bg-white rounded-lg shadow-md">
            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">

                <!-- Header -->
                <div
                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800">
                            Tambah pengumuman
                        </h2>
                        <p class="text-sm text-gray-600">
                            Tambah,kelola dan unggah pengumuman
                        </p>
                    </div>
                </div>
                <!-- End Header -->

                <div class="py-3 border-t border-gray-200"></div>
                <!-- Card Section -->
                <form>
                    <!-- Grid -->
                    <div class="min-w-full divide-y divide-gray-200">

                        <label for="af-submit-app-project-name"
                            class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                            Judul pengumuman
                        </label>

                        <input id="af-submit-app-project-name" type="text"
                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukkan judul pengumuman">
                    </div>

                    <div class="space-y-2">
                        <label for="af-submit-app-description"
                            class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                            Unggah file
                        </label>

                        <div class="relative sm:col-span-9">
                            <input type="file" name="af-submit-application-resume-cv"
                                id="af-submit-application-resume-cv"
                                class="py-2 px-3 pr-16 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="af-submit-app-description"
                            class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                            Deskripsi
                        </label>

                        <textarea id="af-submit-app-description"
                            class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            rows="6" placeholder="Ringkasan yang mendetail akan menjelaskan produk Anda kepada audiens."></textarea>
                    </div>
            </div>
            <!-- End Grid -->

            <div class="mt-5 flex justify-center gap-x-2">
                <button type="button"
                    class="py-2 px-10 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Unggah
                </button>
            </div>
        </div>

        <!-- End Card -->
        </form>

        <!-- End Card Section -->
    </div>
    </div>
    <!-- End Stepper -->
</x-app-layout>
