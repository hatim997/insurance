<!-- BEGIN: Vendor JS-->

<script  src="https://code.jquery.com/jquery-3.7.1.min.js"  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
  <?php echo $__env->yieldContent('page-scripts'); ?>
<script src="<?php echo e(asset(mix('assets/vendor/libs/popper/popper.js'))); ?>"></script>
<script src="<?php echo e(asset(mix('assets/vendor/js/bootstrap.js'))); ?>"></script>
<script src="<?php echo e(asset(mix('assets/vendor/libs/node-waves/node-waves.js'))); ?>"></script>
<script src="<?php echo e(asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'))); ?>"></script>
<script src="<?php echo e(asset(mix('assets/vendor/js/menu.js'))); ?>"></script>
<?php echo $__env->yieldContent('vendor-script'); ?>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="<?php echo e(asset(mix('assets/js/main.js'))); ?>"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<?php echo $__env->yieldPushContent('pricing-script'); ?>
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<?php echo $__env->yieldContent('page-script'); ?>
<!-- END: Page JS-->
<?php /**PATH D:\laravel\resources\views/layouts/sections/scripts.blade.php ENDPATH**/ ?>