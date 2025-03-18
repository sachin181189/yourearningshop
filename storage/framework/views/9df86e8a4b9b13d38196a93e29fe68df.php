<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
          <img src="<?php echo e(URL::asset('/content_image/5.png' )); ?>" style="width:100%;">
      </div>
  </div>
</div>
  <div class="container">
    <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $val->content; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;<?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/term_condition.blade.php ENDPATH**/ ?>