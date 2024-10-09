<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <?php echo e(__('Dosen')); ?>

     <?php $__env->endSlot(); ?>

    <style>
        body {
            background-color: #F9FAFB;
        }
    </style>

        <?php echo $__env->make('components.toast', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="w-full pt-4 px-2 sm:px-4 md:px-10 lg:ps-80 mx-auto">

        <div class="p-4 bg-white rounded-lg shadow-md">
            
            <div class="flex justify-between items-center w-full mb-4">
                <form class="flex-grow mr-2">
                
                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Dosen..." required autocomple="off"/>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                    </div>
                </form>

                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal" data-hs-overlay="#hs-scale-animation-modal">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                    Tambah
                </button>
            </div>


            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">
                
            <!-- Header -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                <div class="sm:col-span-12 flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">
                            Informasi Dosen
                        </h2>
                        <p class="text-sm text-gray-600">
                            Tambah,kelola dan unggah data dosen
                        </p>
                    </div>
                </div>
                
            </div>
                
            <!-- End Header -->

            <div class="py-3 border-t border-gray-200"></div>
                <!-- Table -->
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100 shadow">
                        <tr>
                            </th>
                            <th scope="col" class="ps-6 lg:ps-3 xl:ps-2 pe-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        NIP
                                    </span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        NIDN
                                    </span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        Nama Dosen
                                    </span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        No. Telp
                                    </span>
                                </div>
                            </th>
                            <th scope="col" class="px-3 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        Aksi
                                    </span>
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        <?php if($dosen->isEmpty()): ?>
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                <span class="text-sm text-gray-500">Tidak ada data dosen yang tersedia.</span>
                            </td>
                        </tr>
                        <?php else: ?>
                        <?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="size-px whitespace-nowrap">
                                <div class="ps-6 lg:ps-3 xl:ps-2 pe-6 py-3">
                                    <div class="flex items-center gap-x-3">
                                        <div class="grow">
                                            <span class="block text-sm text-gray-500"><?php echo e($row->NIP); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap ">
                                <div class="px-6 py-3">
                                    <div class="grow">
                                        <span class="block text-sm text-gray-500"><?php echo e($row->NIDN); ?></span>
                                    </div>
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap">
                                <div class="px-6 py-3">
                                        <div class="grow">
                                            <span class="block text-sm text-gray-500"><?php echo e($row->nama_dosen); ?></span>
                                        </div>
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap">
                                <div class="px-6 py-3">
                                    <div class="grow">
                                        <span class="block text-sm text-gray-500"><?php echo e($row->no_telp); ?></span>
                                    </div>
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap py-3">
                                <div class="max-w-xs flex flex-col items-center rounded-lg shadow-sm space-y-1">
                                    <a href="<?php echo e(route('admin.dosen.detail', $row->NIP)); ?>"
                                        class="w-full py-1 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600 disabled:opacity-50 disabled:pointer-events-none">
                                        Ubah
                                    </a>
                                    <form id="deleteForm" action="<?php echo e(route('admin.dosen.delete', '')); ?>" method="POST" class="w-full inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="button"
                                            class="delete-btn w-full py-1 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none"
                                            data-id="<?php echo e($row->NIP); ?>">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                <!-- End Table -->

            </div>
        </div>
    </div>
    <!-- End Stepper -->
    <!-- Modal for adding dosen -->
    <div id="hs-scale-animation-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
        <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] md:max-w-2xl md:w-full m-3 md:mx-auto flex items-center">
            <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                        Tambah Dosen
                    </h3>
                    <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#hs-scale-animation-modal">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
            <form id="add-dosen-form" class="mt-4">
                <div class="w-full space-y-3">
                    <div>
                        <label for="nip" class="block text-sm font-medium mb-2">NIP</label>
                        <div class="relative">
                            <input type="text" id="nip" name="NIP" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-lg text-sm" placeholder="Masukkan NIP...">
                        </div>
                    </div>
                    <div>
                        <label for="nidn" class="block text-sm font-medium mb-2">NIDN</label>
                        <div class="relative">
                            <input type="text" id="nidn" name="NIDN" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-lg text-sm" placeholder="Masukkan NIDN...">
                        </div>
                    </div>
                    <div>
                        <label for="nama-dosen" class="block text-sm font-medium mb-2">Nama Dosen</label>
                        <div class="relative">
                            <input type="text" id="nama-dosen" name="nama_dosen" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-lg text-sm" placeholder="Masukkan nama dosen...">
                        </div>
                    </div>
                    <div>
                        <label for="no-telp" class="block text-sm font-medium mb-2">Nomor Telepon</label>
                        <div class="relative">
                            <input type="text" id="no-telp" name="no_telp" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-lg text-sm" placeholder="Masukkan nomor telepon...">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium mb-2">Email</label>
                        <div class="relative">
                            <input type="email" id="email" name="email" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-lg text-sm" placeholder="Masukkan email...">
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-lg text-sm" placeholder="Masukkan password...">
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center py-3 px-4 border-t">
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-scale-animation-modal">
                        Kembali
                    </button>
                    <button type="button" id="save-btn"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Simpan
                    </button>
                </div>
            </form>
                </div>
        </div>
    </div>

    <div id="deleteConfirmationModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
        <div class="relative top-1/4 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Konfirmasi Penghapusan
                </h3>
                <div class="mt-2 px-7 py-3">
                    <p class="text-sm text-gray-500">
                        Apakah Anda yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan.
                    </p>
                </div>
                <div class="items-center px-4 py-3">
                    <button id="confirmDeleteBtn" class="px-4 py-2 bg-red-600 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-red-700">
                        Hapus
                    </button>
                    <button id="cancelDeleteBtn" class="px-4 py-2 bg-gray-300 text-gray-800 text-base font-medium rounded-md w-full shadow-sm hover:bg-gray-400 mt-2">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const saveBtn = document.querySelector('#save-btn');
    
            saveBtn.addEventListener('click', function () {
                const nip = document.getElementById('nip').value;
                const nidn = document.getElementById('nidn').value;
                const namaDosen = document.getElementById('nama-dosen').value;
                const nomorTelp = document.getElementById('no-telp').value;
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
    
                const formData = new FormData();
                formData.append('NIP', nip);
                formData.append('NIDN', nidn);
                formData.append('nama_dosen', namaDosen);
                formData.append('no_telp', nomorTelp);
                formData.append('email', email);
                formData.append('password', password);
    
                fetch('<?php echo e(route('tambah.dosen')); ?>', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showToast('Data berhasil disimpan!', 'success');
                        setTimeout(() => location.reload(), 1000); // Reload after a short delay
                    } else {
                        showToast('Terjadi kesalahan saat menyimpan data.', 'error');
                    }
                })
                .catch(error => {
                    showToast('Terjadi kesalahan saat menyimpan data.', 'error');
                    console.error('Error:', error);
                });
    
                const modal = document.getElementById('hs-scale-animation-modal');
                if (modal) {
                    modal.classList.add('hidden');
                }
                const backdrop = document.getElementById('hs-scale-animation-modal-backdrop');
                if (backdrop) {
                    backdrop.classList.add('hidden');
                }
            });
    
            const deleteButtons = document.querySelectorAll('.delete-btn');
            const deleteForm = document.getElementById('deleteForm');
            const deleteConfirmationModal = document.getElementById('deleteConfirmationModal');
            const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
            const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');
    
            let deleteId = '';
    
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    deleteId = this.getAttribute('data-id');
                    deleteConfirmationModal.classList.remove('hidden');
                });
            });
    
            confirmDeleteBtn.addEventListener('click', function () {
                if (deleteForm) {
                    deleteForm.action = `<?php echo e(route('admin.dosen.delete', '')); ?>/${deleteId}`;
                    deleteForm.submit();
                }
            });
    
            cancelDeleteBtn.addEventListener('click', function () {
                if (deleteConfirmationModal) {
                    deleteConfirmationModal.classList.add('hidden');
                }
                deleteId = '';
            });
        });
    </script>
    
    
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\PEEKAEL\resources\views//admin/dosen.blade.php ENDPATH**/ ?>