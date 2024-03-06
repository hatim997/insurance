<?php
$isMenu = false;
$navbarHideToggle = false;
?>


<?php $__env->startSection('title', 'Dashboard - main'); ?>

<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/apex-charts/apex-charts.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('assets/vendor/libs/apex-charts/apexcharts.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('assets/js/dashboards-analytics.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row gy-4 justify-content-center">
  <div class="col-md-10 col-lg-10">
<div class="row gy-4">
  <!-- Congratulations card -->
  <div class="col-md-4 col-lg-4">
    <div class="card" style="background: rgb(42,132,254); background: linear-gradient(180deg, rgba(42,132,254,1) 0%, rgba(54,197,255,1) 100%);">
      <div class="card-body text-center">
        <h4 class="mb-1 py-4 text-white">Policy Expiring ia Month !</h4>
    
       
       
        <h2 class="py-3 text-white card-title" style="font-size: 72px">10</h2>
      </div>
    </div>
  </div>
  <!--/ Congratulations card -->
    <!-- Congratulations card -->
    <div class="col-md-4 col-lg-4">
      <div class="card" style="background: rgb(42,132,254); background: linear-gradient(180deg, rgba(42,132,254,1) 0%, rgba(54,197,255,1) 100%);">
        <div class="card-body text-center">
          <h4 class="mb-1 py-4 text-white">Policy Expiring ia Week !</h4>
      
         
         
          <h2 class="py-3 text-white card-title" style="font-size: 72px">13</h2>
        </div>
      </div>
    </div>
    <!--/ Congratulations card -->
      <!-- Congratulations card -->
  <div class="col-md-4 col-lg-4">
    <div class="card" style="background: rgb(42,132,254); background: linear-gradient(180deg, rgba(42,132,254,1) 0%, rgba(54,197,255,1) 100%);">
      <div class="card-body text-center">
        <h4 class="mb-1 py-4 text-white">No of Insureds !</h4>
    
       
       
        <h2 class="py-3 text-white card-title" style="font-size: 72px">1</h2>
      </div>
    </div>
  </div>
  <!--/ Congratulations card -->
  </div>
</div>
  <!-- Data Tables -->
  
  <!--/ Data Tables -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/contentNavbarLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\resources\views/dash.blade.php ENDPATH**/ ?>