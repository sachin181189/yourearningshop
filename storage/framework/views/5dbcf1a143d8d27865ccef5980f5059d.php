<?php echo $__env->make('admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="vendor-list">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><?php echo e($vendorcount); ?></h1>
                                    <h6 class="text-white">Vendor</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="customer-list">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><?php echo e($usercount); ?></h1>
                                    <h6 class="text-white">Network</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="product-list">
                            <div class="card card-hover">
                                <div class="box bg-warning text-center">
                                    <h1 class="font-light text-white"><?php echo e($productcount); ?></h1>
                                    <h6 class="text-white">Product</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="order-list">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><?php echo e($ordercount); ?></h1>
                                    <h6 class="text-white">Order</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="#">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><?php echo e($brandcount); ?></h1>
                                    <h6 class="text-white">Brand</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="store-request">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><?php echo e($storecount); ?></h1>
                                    <h6 class="text-white">Store</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="customer-list">
                            <div class="card card-hover">
                                <div class="box bg-warning text-center">
                                    <h1 class="font-light text-white"><?php echo e($usercount); ?></h1>
                                    <h6 class="text-white">ID</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                <div class="row">
                    <div class="col-12">
                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
            </div>
<?php echo $__env->make('admin/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
window.onload = function () {
    monthlyReport();
}

    function monthlyReport()
    {
      $.ajax({
        url: "<?php echo e(route('monthly-report')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>"
                },
             error: function() {
             },
             success: function(data) {
                var staticsArr=[];
                    $.each(data, function(key,val) {
                            var obj = 
                            {
                                x: new Date(2021, val.order_month), y: val.grand_total 
                            }
                            staticsArr.push(obj);
                        });
                    var options = {
                        animationEnabled: true,  
                        title:{
                            text: "Monthly Sales - 2021"
                        },
                        axisX: {
                            valueFormatString: "MMM"
                        },
                        axisY: {
                            title: "Sales (in INR)",
                            prefix: "₹"
                        },
                        data: [{
                            yValueFormatString: "$#,###",
                            xValueFormatString: "MMMM",
                            type: "spline",
                            dataPoints: staticsArr
	            }]
    };
$("#chartContainer").CanvasJSChart(options);
             }
          });
        }
</script><?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>