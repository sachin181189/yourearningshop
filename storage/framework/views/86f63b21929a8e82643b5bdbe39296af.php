<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__currentLoopData = $business_plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php 
            $id = $value->id;
            $content = $value->content;
            $image1 = $value->image1;
            $image2 = $value->image2;
            $image3 = $value->image3;
            $image4 = $value->image4;
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <style>
    .mb-10
    {
        margin-bottom:10px;
    }
    .alert {
        padding: 8px 14px 13px 30px;
    }
</style>
<div class="container-fluid">
  <!--<div class="row">-->
  <!--    <div class="col-md-12">-->
  <!--        <img src="<?php echo e(URL::asset('/content_image/2.png' )); ?>" style="width:100%;">-->
  <!--    </div>-->
  <!--</div>-->
</div>
    <div class="container mt-5">
        <?php echo $content; ?>

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6"><img src="<?php echo e(URL::asset('/business_plan' )); ?>/<?php echo e($image1); ?>" style="width:100%;"></div>
            <div class="col-md-6"><img src="<?php echo e(URL::asset('/business_plan/' )); ?>/<?php echo e($image2); ?>" style="width:100%;"></div>
            <div class="col-md-6"><img src="<?php echo e(URL::asset('/business_plan/' )); ?>/<?php echo e($image3); ?>" style="width:100%;"></div>
            <div class="col-md-6"><img src="<?php echo e(URL::asset('/business_plan/' )); ?>/<?php echo e($image4); ?>" style="width:100%;"></div>
        </div>
        <br>
        <hr>
    <div class="row">
        <div class="col-sm-1 hidden-xs column-left">
        </div>
        <div class="col-sm-10" id="content">
                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong> <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
            <h4>Request For Shop</h4>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo e(route('send-request')); ?>">
            <?php echo csrf_field(); ?>
                <fieldset id="account">
                    <div class="row mb-10">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input-firstname" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="input-firstname" placeholder="Enter Your Full Name" value="" name="fullname">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input-lastname" class="col-sm-3 control-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="input-phone" placeholder="Enter Your Mobile Number" value="" name="phone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input-firstname" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="input-email" placeholder="Enter Your Email" value="" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input-lastname" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="input-lastname" placeholder="Enter Your Address" value="" name="address">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input-firstname" class="col-sm-3 control-label">Pincode</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="input-pin" placeholder="Enter Your Pincode" value="" name="pincode">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>
                        <input type="checkbox" value="1" name="agree" checked disabled>
                        &nbsp;
                        <input type="submit" class="btn btn-primary" value="Continue">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-1 hidden-xs column-left">
        </div>
    </div>
    </div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/investment_plan.blade.php ENDPATH**/ ?>