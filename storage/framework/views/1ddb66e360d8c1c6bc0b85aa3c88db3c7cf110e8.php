<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC comics</title>

    <!-- Styles -->
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

</head>

<body>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
        </div>
    </div>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH /Users/sophiamziou/Desktop/esercizi Boolean/laravel-comics/resources/views/home.blade.php ENDPATH**/ ?>