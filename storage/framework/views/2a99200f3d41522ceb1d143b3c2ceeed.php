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
      <li><a href="<?php echo e(URL::to('/')); ?>"><i class="fa fa-home"></i></a> </li>
      <li><a href="#"> Our Product</a></li>
    </ul>
  <div class="row">
    <?php $__currentLoopData = $productlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-6 col-6">
        <img src="<?php echo e(asset('our_product')); ?>/<?php echo e($p->image); ?>" alt="<?php echo e($p->title); ?>" class="img-responsive mb-image" />
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yourearningshop\resources\views/our_product.blade.php ENDPATH**/ ?>