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
    </div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/income_plan.blade.php ENDPATH**/ ?>