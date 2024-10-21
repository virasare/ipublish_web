<x-app-layout>
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

        <div class="p-2 bg-white rounded-lg shadow-md">
            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">

                <!-- Header -->
                <div
                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800">
                            Dosen
                        </h2>
                        <p class="text-sm text-gray-600">
                            Tambah dan kelola Dosen
                        </p>
                    </div>
                </div>
                <!-- End Header -->

                <div class="py-3 border-t border-gray-200"></div>
                <!-- Card Section -->
                <div class="space-y-4">
                    <div class="sm:col-span-12 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <input type="hidden" id="nip_asli" name="nip_asli" value="{{ $dosen->NIP }}">
                        <div class="space-y-3">
                            <div>
                                <label for="hs-leading-icon" class="block text-sm font-medium mb-2">NIP</label>
                                <div class="relative">
                                    <div class="relative">
                                        <input type="text" id="nip" name="nip"
                                            class="py-3 mt-4 block w-full text-gray-700  bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                            placeholder="Masukkan NIP..." value="{{ $dosen->NIP }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <label for="hs-leading-icon" class="block text-sm font-medium mb-2">NIDN</label>
                                <div class="relative">
                                    <input type="text" id="nidn" name="nidn"
                                        class="py-3 mt-4 block w-full text-gray-700  bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukkan NIDN..." value="{{ $dosen->NIDN }}">
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Nama Dosen</label>
                                <div class="relative">
                                    <input type="text" id="nama" name="nama"
                                        class="py-3 mt-4 block w-full text-gray-700  bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukkan nama dosen..." value="{{ $dosen->nama_dosen }}">
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <label for="hs-leading-icon" class="block text-sm font-medium mb-2">No. Telp</label>
                                <div class="relative">
                                    <input type="text" id="telp" name="telp"
                                        class="py-3 mt-4 block w-full text-gray-700  bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukkan no.tlp..." value="{{ $dosen->no_telp }}">
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Email</label>
                                <div class="relative">
                                    <input type="text" id="email" name="email"
                                        class="py-3 mt-4 block w-full text-gray-700  bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukkan email..." value="{{ $dosen->email }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Grid -->
            <div class="flex justify-between items-center py-3 px-4">
                <button type="button" onclick="window.location.href = '/admin/dosen'"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                    Kembali
                </button>
                <button type="button" id="save-btn"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Simpan
                </button>
            </div>
            <!-- End Card -->

            <!-- End Card Section -->
        </div>
        <!-- </div> -->
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
                            Konfirmasi perubahan
                        </h3>
                        <div class="mt-1 text-sm text-gray-600">
                            Apakah Anda yakin ingin mengirimkan formulir? Perubahan Anda akan disimpan.
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between">
                                <button id="cancel-btn" type="button"
                                    class="text-gray-500 decoration-2 hover:underline font-medium text-sm focus:outline-none focus:underline">
                                    Kembali
                                </button>
                                <button id="confirm-btn" type="button"
                                    class="text-blue-600 decoration-2 hover:underline font-medium text-sm focus:outline-none focus:underline">
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
                const saveBtn = document.querySelector('#save-btn');


                saveBtn.addEventListener('click', function() {
                    showToastConfirm(
                        'Apakah Anda yakin ingin mengirimkan formulir? Perubahan Anda akan disimpan.', true);
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
                    const nipAsli = document.getElementById('nip_asli').value || null;
                    const nip = document.getElementById('nip').value || null;
                    const nidn = document.getElementById('nidn').value || null;
                    const namaDosen = document.getElementById('nama').value || null;
                    const telp = document.getElementById('telp').value || null;
                    const email = document.getElementById('email').value || null;

                    const formData = new FormData();
                    if (nipAsli) formData.append('NIP_asli', nipAsli);
                    if (nip) formData.append('NIP', nip);
                    if (nidn) formData.append('NIDN', nidn);
                    if (namaDosen) formData.append('nama_dosen', namaDosen);
                    if (telp) formData.append('no_telp', telp);
                    if (email) formData.append('email', email);

                    fetch('{{ route('edit.dosen') }}', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                document.getElementById('nip_asli').value = nip;
                                showToast('Data berhasil disimpan!', false);
                            } else {
                                showToast('Terjadi kesalahan saat menyimpan data.', false);
                            }
                        })
                        .catch(error => {
                            showToast('Terjadi kesalahan saat menyimpan data.', false);
                            console.error('Error:', error);
                        });
                }
            })
        </script>
</x-app-layout>
