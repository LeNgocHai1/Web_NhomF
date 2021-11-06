<?php $__env->startSection('content'); ?>
</div>
<div class="row mt-5 no-gutters">
    <div class="col-md-2">
        <h4 style='color:blue'>CATEGOGY</h4>
        <div class="col-12" style='display: inline-grid;'>
            <?php $__currentLoopData = $listCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <a href="<?php echo e(route('home.category.show',
                    ['category_name'=>\Illuminate\Support\Str::slug($category->category_name,'-'),
                    'id'=>$category->id])); ?>"> <?php echo e(data_get($category,'category_name')); ?>

                </a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
    <div class="col-md-10">
        <?php echo $__env->yieldContent('product-list'); ?>
    </div>

</div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('pages.customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\QLDD_NhomF\QLDD_NhomF\resources\views/home.blade.php ENDPATH**/ ?>