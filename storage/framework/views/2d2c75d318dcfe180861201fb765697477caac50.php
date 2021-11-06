<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'Laravel')); ?>

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item cart-icon">
                
                <a class="nav-link btn btn-success" href="<?php echo e(url('List-Carts')); ?>"><i class="fas fa-cart-arrow-down"></i> <b>Giỏ hàng</b>
                    <?php if(Session::has("Cart") != null): ?>
                    <span style="width: 25px;" id="total-quanty-show" class="badge badge-success ml-3"><?php echo e(Session::get("Cart")->totalQuanty); ?></span>
                    <?php else: ?>
                    <span style="width: 25px;" id="total-quanty-show" class="badge badge-success ml-3">0</span>
                    <?php endif; ?>
                </a>
            <div class="cart-hover">
                <div id="change-item-cart">
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
                               </div>
                               <div class="select-button">
                                <a href="<?php echo e(url('List-Carts')); ?>" class="primary-btn view-card"> <b>XEM GIỎ HÀNG</b> </a>
                                <a href="#" class="primary-btn checkout-btn"><b>THANH TOÁN</b></a>
                            </div>
                            <?php else: ?> 
                            
                            <?php endif; ?>
                               </div>
                                 
                             </div>
            </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php if(Route::has('register')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
                <?php endif; ?>
                <?php else: ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <?php if(Auth::check() && Auth::user()->role == 1): ?>
                        <a class="dropdown-item" href="<?php echo e(route('admin.show')); ?>">
                        <i class='fas fa-database'></i>
                        Trang quản trị
                        </a>
                        <?php endif; ?>
                        <a class="dropdown-item" href="<?php echo e(route('admin.detailuser')); ?>">
                        <i class="fas fa-user"></i>
                            Thông tin tài khoản

                        </a>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class='fas fa-sign-in-alt'></i>
                            <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

</nav>
<?php /**PATH C:\wamp\www\QLDD_NhomF\QLDD_NhomF\resources\views/pages/customer/header.blade.php ENDPATH**/ ?>