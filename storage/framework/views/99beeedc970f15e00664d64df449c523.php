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
        <?php echo e(__('Role')); ?>

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
        <div class="p-4 bg-white rounded-lg shadow-md">
            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">
                <!-- Header -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="sm:col-span-12 flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">Role User</h2>
                            <p class="text-sm text-gray-600">Edit Role User</p>
                        </div>
                    </div>
                </div>
                <!-- End Header -->
                <div class="py-3 border-t border-gray-200"></div>

                <!-- Formulir untuk mengupdate role -->
                <form action="<?php echo e(route('admin.role')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100 shadow">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">Email</span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">Nama</span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">Role</span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">Edit role</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="h-px w-72 whitespace-nowrap py-3">
                                    <div class="px-6 py-3">
                                        <span class="block text-sm text-gray-500"><?php echo e($row->email); ?></span>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap py-3">
                                    <div class="px-6 py-3">
                                        <span class="block text-sm text-gray-500"><?php echo e($row->name); ?></span>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap py-3">
                                    <div class="px-6 py-3">
                                        <span class="block text-sm text-gray-500">
                                            <?php echo e($row->roles == 1 ? 'Admin' : 'Non Admin'); ?>

                                        </span>
                                        
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap py-3">
                                    <div class="px-6 py-3">
                                        <select name="roles[<?php echo e($row->id); ?>]"
                                                class="sm:col-span-9 block w-full py-3 px-4 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" required>
                                            <option value="1" <?php echo e($row->roles == 1 ? 'selected' : ''); ?>>Admin</option>
                                            <option value="2" <?php echo e($row->roles == 2 ? 'selected' : ''); ?>>Non Admin</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                
                    <div class="space-y-6 border-t">
                        <div class="mt-5 flex justify-end">
                            <button type="submit"
                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
                
            <div class="pt-4">
                <?php echo e($user->links('pagination::tailwind')); ?>

            </div>
        </div>
    </div>
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
<?php /**PATH /Users/kadekwiradnyana/Herd/PKL/resources/views/admin/ubahRole.blade.php ENDPATH**/ ?>