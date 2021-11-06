<?php $__env->startSection('product-list'); ?>
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 14rem;">
                    <img height="200px" class="card-img-top" src="<?php echo e(asset('storage/'.$product->image)); ?>"
                         alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-text text-left"><?php echo e($product->name); ?></h3>
                        <p class="item-txt-online"><?php echo e($product->price); ?>đ</p>
                        <p class="card-text"><?php echo e(substr($product->description,0,30) . '...'); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\QLDD_NhomF\resources\views/pages/product/index.blade.php ENDPATH**/ ?>