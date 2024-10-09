<?php if (isset($component)) { $__componentOriginal951024bfcf58033c82ac11d797616473 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal951024bfcf58033c82ac11d797616473 = $attributes; } ?>
<?php $component = App\View\Components\UserLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\UserLayout::ignoredParameterNames()); ?>
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

    
    <div class="w-full pt-4 px-2 sm:px-4 md:px-10 lg:ps-80 mx-auto bg-[#F9FAFB]">
        <!-- Content Container -->
        <div class="p-4 bg-white rounded-lg shadow-md">            
            
            <!-- Posts Container -->
            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">
                <?php if($posts->isEmpty()): ?>
                    <div class="text-center py-4">
                        <span class="text-sm text-gray-500">Tidak ada pengumuman tersedia.</span>
                    </div>
                <?php else: ?>
                    <!-- Section -->
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="grid sm:grid-cols-12 gap-2 sm:gap-2 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                            <div class="sm:col-span-12">
                                <div class="flex items-center justify-start pt-2 pb-2 px-4 text-xs font-medium bg-gray-100 text-gray-800 -mt-px rounded-none text-left w-full">
                                    <a href="<?php echo e(url('beranda/' . $post->slug)); ?>" class="hover:underline">
                                        <h2 class="text-lg font-bold text-gray-800"><?php echo e($post->title); ?></h2>
                                    </a>
                                </div>
                                <a href="#" class="text-xs text-gray-400">Diunggah pada <?php echo e($post->created_at->locale('id')->diffForHumans()); ?></a>
                            </div>
                            
                            <div class="sm:col-span-12">
                                <?php if($post->file): ?> 
                                    <div class="mt-4 flex items-center justify-start px-4 text-xs font-medium bg-gray-100 text-gray-800 rounded-none text-left w-full">
                                        <div class="my-3 text-sm font-medium-light text-gray-400 flex items-center">
                                            <?php
                                            $fileExtension = pathinfo($post->file, PATHINFO_EXTENSION);
                                        ?>
                                        <?php if($fileExtension == 'pdf'): ?>
                                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                                        <?php elseif($fileExtension == 'docx'): ?>
                                            <i class="fas fa-file-word text-blue-600 mr-2"></i>
                                        <?php elseif($fileExtension == 'ppt' || $fileExtension == 'pptx'): ?>
                                            <i class="fas fa-file-powerpoint text-orange-600 mr-2"></i>
                                        <?php elseif($fileExtension == 'xlsx' || $fileExtension == 'xls'): ?>
                                            <i class="fas fa-file-excel text-green-600 mr-2"></i>
                                        <?php elseif($fileExtension == 'txt'): ?>
                                            <i class="fas fa-file-alt text-gray-600 mr-2"></i>
                                        <?php elseif($fileExtension == 'csv'): ?>
                                            <i class="fas fa-file-csv text-purple-600 mr-2"></i>
                                        <?php else: ?>
                                            <i class="fas fa-file text-gray-600 mr-2"></i>
                                        <?php endif; ?>
                                            <a href="<?php echo e(asset('storage/documents/' . $post->file)); ?>" class="text-blue-500 hover:underline">
                                                <?php echo e($post->file); ?>

                                            </a>                                
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="sm:col-span-12">
                                <p class="my-4 text-sm font-medium-light text-gray-500">
                                    <?php echo e(Str::limit($post->body, 200)); ?>

                                </p>
                                <a href="<?php echo e(url('beranda/' . $post->slug)); ?>" class="text-sm font-medium text-blue-500 hover:underline">
                                    Lihat selengkapnya &raquo;
                                </a>
                            </div>
                            
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- End Final Content -->
    </div>
    <!-- End Content -->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal951024bfcf58033c82ac11d797616473)): ?>
<?php $attributes = $__attributesOriginal951024bfcf58033c82ac11d797616473; ?>
<?php unset($__attributesOriginal951024bfcf58033c82ac11d797616473); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal951024bfcf58033c82ac11d797616473)): ?>
<?php $component = $__componentOriginal951024bfcf58033c82ac11d797616473; ?>
<?php unset($__componentOriginal951024bfcf58033c82ac11d797616473); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\PEEKAEL\resources\views/users/beranda.blade.php ENDPATH**/ ?>