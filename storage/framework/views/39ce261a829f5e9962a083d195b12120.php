<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['active' => false, 'href' => null]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['active' => false, 'href' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$classes = ($active ?? false)
            ? 'flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg bg-[#2C698D] focus:outline-none hover:cursor-default'
            : 'flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-gray-700 focus:outline-none hover:cursor-pointer';
?>

<?php if($href): ?>
    <a href="<?php echo e($href); ?>" <?php echo e($attributes->merge(['class' => $classes])); ?>>
        <?php echo e($slot); ?>

    </a>
<?php else: ?>
    <button type="button" <?php echo e($attributes->merge(['class' => $classes])); ?>>
        <?php echo e($slot); ?>

    </button>
<?php endif; ?><?php /**PATH /Users/kadekwiradnyana/Herd/PKL/resources/views/components/nav-link.blade.php ENDPATH**/ ?>