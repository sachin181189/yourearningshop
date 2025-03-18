<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    .mb-image
    {
       border: 1px solid lightgray;
        margin-bottom: 20px; 
        width:100%;
    }
</style>
<div class="container">
  <ul class="breadcrumb">
      <li><a href="<?php echo e(URL::to('/')); ?>"><i class="fa fa-home"></i></a></li>
      <li><a href="#">Brands</a></li>
    </ul>
  <div class="row">
    <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brnd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-6 col-6">
        <a href="<?php echo e(URL::to('product-by-brand')); ?>/<?php echo e($brnd->slug); ?>"><img src="<?php echo e(asset('brand_image')); ?>/<?php echo e($brnd->image); ?>" alt="<?php echo e($brnd->brand_name); ?>" class="img-responsive mb-image" /></a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/brands.blade.php ENDPATH**/ ?>