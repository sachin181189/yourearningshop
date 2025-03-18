<?php echo $__env->make('admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dcoument List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dcoument List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Document</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 1;
                                        ?>

                                        <?php $__currentLoopData = $documentlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i); ?></td>
                                                <td><?php echo e($value->document_name); ?></td>
                                                <td width="33%">
                                                    <img src="<?php echo e(URL::asset('/document')); ?>/<?php echo e($value->document); ?>" style="width:200px; height:200px;" frameborder="0">
                                                </td>
                                                <?php if($value->status == 1): ?>
                                                <td><button class="btn btn-success btn-sm">Active</td>
                                                <?php else: ?>
                                                <td><button class="btn btn-danger btn-sm">Inactive</td>
                                                <?php endif; ?>
                                                <td>
                                                <a title="Edit" href="edit-document/<?php echo e($value->id); ?>"><i class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                        $i++;
                                        ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php echo $__env->make('admin/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
<script>
function confirmremove(sliderid)
   {
     swal({
            title: "Are you sure ?",
            text: "Want to remove slider !", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            removeSlider(sliderid);
          } else { 
            swal("","Action cancelled!");
          }
        });
   }
   function removeSlider(sliderid)
   {
      $.ajax({
             url: "<?php echo e(route('removeslider')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                 "sliderid":sliderid
                },
             error: function() {
                swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(data) {
                if(data == "Changed")
                {
                    swal({ title: "",
                         text: "Slider removed !",
                         type: "success"}).then(okay => {
                           if (okay) {
                            location.reload();
                          }
                        });
                }
                  else
                  {
                    swal("", "Something is wrong !", "error");
                  }
             }
          });
   }
   </script><?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/admin/document_list.blade.php ENDPATH**/ ?>