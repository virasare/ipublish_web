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
        <?php echo e(__('Beranda')); ?>

     <?php $__env->endSlot(); ?>

    
    <style>
        body {
            background-color: #F9FAFB;
        }
    </style>

    <?php echo $__env->make('components.toast', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Toast Notification -->
    <?php if(session('success')): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                showToast("<?php echo e(session('success')); ?>", 'success');
            });
        </script>
    <?php elseif(session('error')): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                showToast("<?php echo e(session('error')); ?>", 'error');
            });
        </script>
    <?php endif; ?>
     
    <div class="w-full pt-4 px-2 sm:px-4 md:px-10 lg:ps-80 mx-auto bg-[#F9FAFB]">
        
        <!-- Content Container -->
        <div class="p-4 bg-white rounded-lg shadow-md">
            <div class="py-3 flex justify-end">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal" data-hs-overlay="#hs-scale-animation-modal">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                    Tambah
                </button>
            </div>

            <!-- Posts Container -->
            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">
                <div
                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="sm:col-span-12 flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">
                                Pengumuman
                            </h2>
                            <p class="text-sm text-gray-600">
                                Tambah,kelola dan unggah pengumuman
                            </p>
                        </div>
                    </div>
                </div>

                <div class="py-3 border-t border-gray-200"></div>

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100 shadow">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        Judul
                                    </span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        Status
                                    </span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        Deskripsi
                                    </span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        File
                                    </span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        Aksi
                                    </span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($beranda->isEmpty()): ?>
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    <span class="text-sm text-gray-500">Tidak ada data beranda yang tersedia.</span>
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php $__currentLoopData = $beranda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-400 "><?php echo e($row->title); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400 ">
                                <?php if($row->status === 'active'): ?>
                                    Aktif
                                <?php elseif($row->status === 'non-active'): ?>
                                    Non Aktif
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 whitespace-normal text-sm text-gray-400"><?php echo e($row->body); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-400">
                                <a href="<?php echo e(asset('storage/documents/'.$row->file)); ?>" target="_blank"><?php echo e($row->file); ?></a>   
                            </td>
                            <td class="size-px whitespace-nowrap py-3">
                                <div class="max-w-xs flex flex-col items-center rounded-lg shadow-sm space-y-1">
                                    <?php if(isset($row->slug)): ?>
                                    <a href="<?php echo e(route('beranda.edit', ['slug' => $row->slug])); ?>"
                                        class="w-full py-1 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600 disabled:opacity-50 disabled:pointer-events-none">
                                        Ubah
                                    </a>
                                    <form id="deleteForm" action="<?php echo e(route('admin.beranda.delete', ['slug' => $row->slug])); ?>" method="POST" class="w-full inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="button" 
                                            class="delete-btn w-full py-1 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
                                            Hapus
                                        </button>
                                    </form>                                    
                                 <?php endif; ?>                                 
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                
            </div>
        </div>
        <!-- End Final Contnet -->
    </div>
    <!-- End Stepper Content -->
    <div id="hs-scale-animation-modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
        <div
            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] md:max-w-2xl md:w-full m-3 md:mx-auto flex items-center">
            <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                        Tambah Pengumuman
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#hs-scale-animation-modal">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <form action="<?php echo e(route('admin.beranda.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="space-y-3 mx-6 my-6">
                            <div class="space-y-3">
                                <div>
                                    <label for="title" class="block text-sm font-medium mb-2">Judul
                                        pengumuman</label>
                                    <input type="text" id="title" name="title"
                                        class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukkan judul pengumuman...">
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div>
                                    <label for="body" class="block text-sm font-medium mb-2">Deskripsi</label>
                                    <textarea id="body" name="body"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        rows="3" placeholder="Masukkan deskripsi..."></textarea>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div>
                                    <label for="file" class="block text-sm font-medium mb-2 ">Unggah file</label>
                                    <input type="file" name="file" id="file"
                                        class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none  file:bg-gray-50 file:border-0 file:me-4 file:py-2 file:px-4">
                                    <span class="text-gray-400" style="font-size: 10px;">
                                        File maks 2 MB.
                                    </span>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div>
                                    <label for="status" class="block text-sm font-medium mb-2">Status</label>
                                    <select id="status" name="status"
                                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                        <option selected>Pilih status...</option>
                                        <option value="active">Aktif</option>
                                        <option value="non-active">Non Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center py-3 px-4 border-t">
                            <button type="button"
                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-overlay="#hs-scale-animation-modal">
                                Kembali
                            </button>
                            <button type="submit"
                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-btn');
            const deleteForm = document.getElementById('deleteForm');
            const deleteConfirmationModal = document.getElementById('deleteConfirmationModal');
            const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
            const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');

            let deleteId = '';

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    deleteId = this.closest('form').action.split('/')
                .pop(); // Ambil slug dari action form
                    deleteConfirmationModal.classList.remove('hidden');
                });
            });

            confirmDeleteBtn.addEventListener('click', function() {
                deleteForm.action = `<?php echo e(route('admin.beranda.delete', '')); ?>/${deleteId}`;
                deleteForm.submit();
            });

            cancelDeleteBtn.addEventListener('click', function() {
                deleteConfirmationModal.classList.add('hidden');
                deleteId = '';
            });
        })
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
<?php /**PATH /Users/kadekwiradnyana/Herd/PKL/resources/views/admin/beranda.blade.php ENDPATH**/ ?>