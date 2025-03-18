<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid" style="border-bottom: 1px solid lightgray;">
  <div class="row">
      <div class="col-md-12">
          <h4>Company Videos</h4>
      </div>
  </div>
</div>
  <div class="container mt-5">
  <div class="row">
    <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box p-0">
                <iframe height="250px" src="<?php echo e($val->video_url); ?>"></iframe>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/videos.blade.php ENDPATH**/ ?>