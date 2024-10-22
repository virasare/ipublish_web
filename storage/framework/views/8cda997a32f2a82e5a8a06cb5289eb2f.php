<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta id="user-email" data-email="<?php echo e(Auth::user()->email); ?>">
    
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="font-sans antialiased">
    


    <!- Page Heading ->
        <?php if(isset($header)): ?>
            <div class="bg-[#DBE9FE] shadow pt-0 px-4 sm:px-6 md:px-8 lg:ps-72">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="text-[30px] font-bold">
                        <?php echo e($header); ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>


        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\iPublish\resources\views/layouts/app.blade.php ENDPATH**/ ?>