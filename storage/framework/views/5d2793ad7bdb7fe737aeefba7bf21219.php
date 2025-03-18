<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

  <div class="container mt-5">
      <div class="row text-center">
          <div class="col-md-12 text-center">
          <h2>Our Store</h2>
          </div>
      </div>
        <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Store Id</th>
        <th>Store Name</th>
        <th>Address</th>
        <th>Pincode</th>
      </tr>
    </thead>
    <tbody>
            <?php $__currentLoopData = $store_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($val->store_id); ?></td>
        <td><?php echo e($val->fullname); ?></td>
        <td><?php echo e($val->address); ?></td>
        <td><?php echo e($val->pincode); ?></td>
      </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;<?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/store_list.blade.php ENDPATH**/ ?>