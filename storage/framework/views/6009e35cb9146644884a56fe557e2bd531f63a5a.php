<?php $__env->startSection('content'); ?>
 <div class="card" style="width: 18rem;">
    <img src="<?php echo e($single_book['thumb']); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo e($single_book['title']); ?></h5>
     </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/sophiamziou/Desktop/esercizi Boolean/laravel-model-controller/resources/views/single_comic.blade.php ENDPATH**/ ?>