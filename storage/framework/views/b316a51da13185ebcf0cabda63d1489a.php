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
        <?php echo e(__('Profile')); ?>

     <?php $__env->endSlot(); ?>

    <style>
        body {
            background-color: #F9FAFB;
        }
    </style>

    <?php echo $__env->make('components.toast', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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


    <div class="w-full pt-4 px-2 sm:px-4 md:px-10 lg:ps-80 mx-auto">

        <div class="p-2 bg-white rounded-lg shadow-md">
            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">

                <!-- Header -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800">
                            Kelola Profile
                        </h2>
                        <p class="text-sm text-gray-600">
                            Edit dan simpan profile
                        </p>
                    </div>
                </div>
                <!-- End Header -->

                <div class="py-3 border-t border-gray-200"></div>
                
                <!-- Form Section -->
                <form method="POST" action="<?php echo e(route("profile.update")); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="nip" class="block text-sm font-medium mb-2">NIP</label>
                                <input type="text" id="nip" name="nip" value="<?php echo e($dosen->NIP ?? ''); ?>" class="py-3 mt-4 block w-full bg-gray-100 text-gray-400 border-gray-100 shadow-sm rounded-lg text-sm" disabled>
                            </div>
                            
                            <div>
                                <label for="nidn" class="block text-sm font-medium mb-2">NIDN</label>
                                <input type="text" id="nidn" name="nidn" value="<?php echo e($dosen->NIDN ?? ''); ?>" class="py-3 mt-4 block w-full text-gray-400 bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm" placeholder="Masukkan NIDN..." disabled>
                            </div>
                            
                            <div>
                                <label for="nama" class="block text-sm font-medium mb-2">Nama Dosen</label>
                                <input type="text" id="nama" name="nama" value="<?php echo e($dosen->nama_dosen ?? ''); ?>" class="py-3 mt-4 block w-full text-gray-400 bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm" placeholder="Masukkan nama dosen..." disabled>
                            </div>
                            
                            <div>
                                <label for="telp" class="block text-sm font-medium mb-2">No. Telp</label>
                                <input type="text" id="telp" name="telp" value="<?php echo e($dosen->no_telp ?? ''); ?>" class="py-3 mt-4 block w-full text-gray-400 bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm" placeholder="Masukkan no.telp..." disabled>
                            </div>
                            
                        </div>
                        <div class="py-3 mt-10 border-t border-gray-200"></div>
                
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block text-sm font-medium mb-2">Ubah kata sandi</label>
                                <input type="password" id="password" name="password" class="py-3 mt-4 block w-full text-gray-700 bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm" placeholder="Masukkan kata sandi baru...">
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <!-- Pesan error akan ditangani oleh toast -->
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium mb-2">Konfirmasi kata sandi</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="py-3 mt-4 block w-full text-gray-700 bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm" placeholder="Konfirmasi kata sandi baru...">
                                <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <!-- Pesan error akan ditangani oleh toast -->
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <input type="hidden" name="email" value="<?php echo e($dosen->email); ?>">
                        </div>
                    </div>
            </div>
            <div class="flex justify-between items-center py-3 px-4">
                <button type="button" onclick="window.location.href = '/admin/dosen'"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50">
                    Kembali
                </button>
                <button type="submit"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700">
                    Simpan
                </button>
            </div>
        </form>
        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menampilkan toast notification jika ada pesan kesalahan
            <?php if($errors->any()): ?>
                showToast("Terjadi kesalahan saat menyimpan data.", 'error');
            <?php endif; ?>
    
            // Menampilkan toast notification jika ada pesan sukses
            <?php if(session('success')): ?>
                showToast("<?php echo e(session('success')); ?>", 'success');
            <?php endif; ?>
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
<?php /**PATH C:\laragon\www\PEEKAEL\resources\views/admin/profile.blade.php ENDPATH**/ ?>