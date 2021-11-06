<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('manage-category-store')); ?>">
     <?php echo csrf_field(); ?>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Caterory</label>
    <input type="text" name="category_name" class="form-control" id="exampleFormControlInput1" placeholder="Category name..">
    </div>
    <div class="d-flex justify-content-center" >
        <button class="btn btn-success" type="submit">Save</button>
        
        <!-- <button type="button" class="btn btn-danger ml-3">Back</button> -->
    </div>
    
</form>
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\QLDD_NhomF\resources\views/pages/category/create.blade.php ENDPATH**/ ?>