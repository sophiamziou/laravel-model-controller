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
    <main>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('single-comic', ['param'=> $key])); ?>">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo e($book['thumb']); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title"><?php echo e($book['title']); ?></h5>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </main>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH /Users/sophiamziou/Desktop/esercizi Boolean/laravel-comics/resources/views/comics.blade.php ENDPATH**/ ?>