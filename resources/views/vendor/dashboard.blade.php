@include('vendor/header')
@include('vendor/sidebar')

        <div class="page-wrapper">
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Vendor Dahboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Vendor Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white">{{$product}}</h1>
                                <h6 class="text-white">Total Product</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white">{{$order}}</h1>
                                <h6 class="text-white">Total Order</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-12">
                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>
                </div>
            </div>
            <input type="hidden" id="hidden_vendor_id" value="<?php echo Session::get('vendor_id'); ?>">
@include('vendor/footer')
<script>
window.onload = function () {
    monthlyReport();
}

    function monthlyReport()
    {
      $.ajax({
        url: "{{ route('vendor-monthly-report') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}"
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
        
    $( document ).ready(function() {
        monthlySettlement();
    });
    
    function monthlySettlement()
    {
        var vendor_id = $('#hidden_vendor_id').val();
        $.ajax({
            url: "{{ route('monthly-settlement') }}",
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                vendor_id:vendor_id,
                },
            dataType: "JSON",
            success: function(data) {
                console.log(data);
            }
        });
    }
    
    
    
    
        
</script>