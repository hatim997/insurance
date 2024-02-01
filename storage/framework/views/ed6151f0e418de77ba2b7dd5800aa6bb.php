
<?php $__env->startSection('title', ' Vertical Layouts - Forms'); ?>
<?php $__env->startSection('content'); ?>
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Truckers Certificate of Insurance</h4>
<p>Please fill out the following information and press the submit button to request a certificate of insurance. Your request will be processed and sent to you as soon as possible. Certificates will only be issued upon verification of coverage.</p>
  <form method="post" <?php echo e(route('form.user')); ?> action="reg" >
    <?php echo csrf_field(); ?>
<!-- Basic Layout -->
<?php if(Session::has('success')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <?php echo e(Session::get('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
<?php endif; ?> 
<?php if($errors->any()): ?>
   
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <?php echo e($error); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
<?php endif; ?>



<div class="row"> 
    <!---------------------------------------------------------------------------------------------------------------------------
      --------------------------------------------------------------- PRODUCER  ---------------------------------------------------
      ----------------------------------------------------------------------->
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">PRODUCER</h5> <small class="text-muted float-end">USER INFO</small>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-6">
          <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" name="username" id="basic-default-fullname" placeholder="ACME Inc." />
            <label for="basic-default-fullname">INSURNAME</label>
          </div>
        </div>
          <div class="col-6">
            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="password"id="basic-default-company"  placeholder="********" />
                <label for="basic-default-company">Insured's MC #</label>
            </div>
    </div>
    <div class="col-6">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" name="username" id="basic-default-fullname" placeholder="ACME Inc." />
          <label for="basic-default-fullname">Certificate Holder</label>
        </div>
      </div>
        <div class="col-6">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control"name="email" id="basic-default-company" placeholder="Address line1" />
          <label for="basic-default-company">Street Address</label>
      </div>
  </div>
  <div class="col-6">
    <div class="form-floating form-floating-outline mb-4">
      <input type="text" class="form-control" name="username" id="basic-default-fullname" placeholder="ACME Inc." />
      <label for="basic-default-fullname">Street Address LINE 2</label>
    </div>
  </div>
    <div class="col-4">
    <div class="form-floating form-floating-outline mb-4">
      <input type="text" class="form-control"name="email" id="basic-default-company" placeholder="Address line1" />
      <label for="basic-default-company">CITY</label>
  </div>
</div>
        <div class="col-4">
        <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" name="password"id="basic-default-company"  placeholder="********" />
            <label for="basic-default-company">STATE</label>
        </div>
    </div>  <div class="col-4">
        <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" name="password"id="basic-default-company"  placeholder="********" />
            <label for="basic-default-company">ZIP CODE</label>
        </div>
    </div> 
        
    <div class="col-6">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control"name="email" id="basic-default-company" placeholder="Address line1" />
          <label for="basic-default-company">EAMIL</label>
      </div>
  </div>
  <div class="col-6">
    <div class="form-floating form-floating-outline mb-4">
      <input type="text" class="form-control" name="username" id="basic-default-fullname" placeholder="ACME Inc." />
      <label for="basic-default-fullname">PHONE #</label>
    </div>
  </div>
      </div>
          
         
                
      </div>    
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Send</button> 
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/contentNavbarLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\resources\views/truck/trucker.blade.php ENDPATH**/ ?>