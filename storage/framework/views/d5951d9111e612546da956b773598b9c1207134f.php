<?php if(Session::has("Cart") != null): ?>
<div class="select-items">
  <table>
      <tbody>
         <?php $__currentLoopData = Session::get('Cart')->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td class="si-pic"><img src="public/upload/<?php echo e($item['productInfo']->productImage); ?>" style="vertical-align: middle;  width:80px;margin-right: 30px" alt=""></td>
              <td class="si-text">
                  <div class="product-selected">
                      <b><?php echo e(number_format($item['productInfo']->listPrice)); ?>₫ x <?php echo e($item['quanty']); ?></b>
                      <h6><?php echo e($item['productInfo']->productName); ?></h6>
                  </div>
              </td>
              <td class="si-close">
            
                
                <h4><a class="" data-id="<?php echo e($item['productInfo']->productID); ?>" role="button"><i class="far fa-times"></i></a></h4>
         
              </td>
          </tr>
                       
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
  </table>
</div>
<div class="select-total">
  <h6>TỔNG TIỀN:</h6>
  <h5><?php echo e(number_format(Session::get('Cart')->totalPrice)); ?>₫</h5>
  <input hidden id="total-quanty-cart" type="number" value="<?php echo e(Session::get('Cart')->totalQuanty); ?>">
</div>  
<div class="select-button">
  <a href="<?php echo e(url('List-Carts')); ?>" class="primary-btn view-card"> <b>XEM GIỎ HÀNG</b> </a>
  <a href="#" class="primary-btn checkout-btn"><b>THANH TOÁN</b></a>
</div>
<?php else: ?> 
<h4 style="color: #4A235A;">Vui lòng thêm sản phẩm</h4>

<?php endif; ?><?php /**PATH C:\wamp\www\QLDD_NhomF\QLDD_NhomF\resources\views/cart.blade.php ENDPATH**/ ?>