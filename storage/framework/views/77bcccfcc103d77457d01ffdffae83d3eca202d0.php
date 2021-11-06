<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('manage-product.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product name</label>
            <input type="text" name="product_name" class="form-control" id="exampleFormControlInput1"
                   placeholder="Product name..">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product price</label>
            <input type="text" name="product_price" class="form-control" id="exampleFormControlInput1"
                   placeholder="Product price..">
        </div>
        <div class="mb-3">
        <label for="exampleDataList" class="form-label">Category name</label>
        <select class="custom-select" name="category_id">
            <option selected value="">Select category name</option>

           <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option  value="<?php echo e(data_get($cate,'id')); ?>"><?php echo e(data_get($cate,'category_name')); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Product image</label>
            <input class="form-control" type="file" id="formFile" name="product_image">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px" name="product_desc"></textarea>
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-success" type="submit">Save</button>

            <!-- <button type="button" class="btn btn-danger ml-3">Back</button> -->
        </div>

    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\QLDD_NhomF\resources\views/pages/product/create.blade.php ENDPATH**/ ?>