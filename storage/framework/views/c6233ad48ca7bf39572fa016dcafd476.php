<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<div class="container">
  <ul class="breadcrumb">
    <li><a href="/"><i class="fa fa-home"></i></a></li>
    <li><a href="#">My Wishlist</a></li>
  </ul>
  <div class="row">
    <div class="col-md-12">
    <h3>My Wishlist</h3>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <form enctype="multipart/form-data" method="post" action="#">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="text-center">Image</td>
                <td class="text-left">Product Name</td>
                <td class="text-center">Price</td>
                <td class="text-center">Offer Price</td>
                <td class="text-center">Action</td>
              </tr>
            </thead>
            <tbody id="wishlist_list">

            </tbody>
          </table>
        </div>
      </form>
    </div>
</div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/wishlist.blade.php ENDPATH**/ ?>