<?php $__env->startSection('title', 'Login Basic - Pages'); ?>

<?php $__env->startSection('page-style'); ?>
<!-- Page -->
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/css/pages/page-auth.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="position-relative">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">

            <!-- Login -->
                        <div class="card" >
                            <!-- Logo -->
                            
                            <!-- /Logo -->

                            <div class="card-body p-0">
                                <div class="row p-0">
                                <div class="col-md-6 rounded-5" style="background-color: #24235b; border-start-start-radius: 10px;border-end-start-radius: 10px;">
                                    <div style="display :flex;flex: 1 1 0%;flex-direction: row;height: 100%;align-content: center;align-items: center;">
                                        
                                            <div class="d-flex flex-col align-content-center justify-content-center" >
                
                
                                                <span
                                                class="app-brand-logo2 demo"><?php echo $__env->make('_partials.macross',["height"=>20,"withbg"=>'fill:
                                                #fff;'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></span>
                                            
                
                
                
                                              
                                        </div>
                                    </div>
                
                                </div>
                                <div class="col-md-6" style=" border-start-end-radius: 10px;border-end-end-radius: 10px;">

                                <h4 class="mb-2 pt-4 pb-5 text-center">Insurance Agent</h4>
                        
                                <form id="formAuthentication" class="mb-3 py-3 px-4" action="<?php echo e(url('/login')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input type="text" class="form-control" id="email" name="username"
                                            placeholder="Enter your email or username" autofocus>
                                        <label for="email">Email or Username</label>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-password-toggle">
                                            <div class="input-group input-group-merge">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="password" id="password" class="form-control"
                                                        name="password"
                                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        aria-describedby="password" />
                                                    <label for="password">Password</label>
                                                </div>
                                                <span class="input-group-text cursor-pointer"><i
                                                        class="mdi mdi-eye-off-outline"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                                    </div>
                                </form>

                                <!-- s<p class="text-center">
                        <span>New on our platform?</span>
                        <a href="<?php echo e(url('auth/register-basic')); ?>">
                            <span>Create an account</span>
                        </a>
                    </p> -->
                            </div>
                        </div>
                    </div>
                </div>
       
  
        <!-- /Login -->
        
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/blankLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\resources\views/content/authentications/auth-login-basic.blade.php ENDPATH**/ ?>