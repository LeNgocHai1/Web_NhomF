<?php $__env->startSection('product-list'); ?>
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 14rem;">
                    <img height="200px" class="card-img-top" src="<?php echo e(asset('storage/'.$product->image)); ?>"
                         alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-text text-center"><?php echo e($product->name); ?></h3>
                        <h5 class="card-text mt-6"><span >Price: </span><?php echo e($product->price); ?></h5>
                        <p class="card-text"><?php echo e(substr($product->description,0,30) . '...'); ?></p>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\QLDD_NhomF\resources\views/pages/product/index.blade.php ENDPATH**/ ?>